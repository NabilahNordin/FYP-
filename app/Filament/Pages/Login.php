<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Auth\Pages\Login as OriLogin;
use Filament\Schemas\Components\Component;
use Filament\Models\Contracts\FilamentUser;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Login extends OriLogin
{
    protected string $view = 'filament.pages.login';
    //  protected string $view = 'filament-panels::pages.simple';


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getUsernameFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getRememberFormComponent(),
            ]);
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Username'))
            ->required()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $data = $this->form->getState();
        $check = $this->processLogin($data);
        if (!$check) {
            return null;
        }
        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (!$user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();
            $this->throwFailureValidationException();
        }


        session()->regenerate();

        return app(LoginResponse::class);
    }

    function processLogin($data)
    {
        $user = User::where('username', $data['username'])
            ->first();

        if ($user && Hash::check($data['password'], $user->password)) {


            Auth::login($user);
            activity()
                ->causedBy(auth()->user())
                ->withProperties([
                    'ip'    => request()->ip(),
                    'agent' => request()->userAgent(),
                ])
                ->log('user logged in');
            return true;
        }

        Notification::make()
            ->title(__('Data not found'))
            ->danger()
            ->send();

        return false;
    }
}
