<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class Welcome extends Page
{
    protected string $view = 'filament.pages.welcome';
    protected static string $layout = 'filament-panels::components.layout.base';

    protected static bool $shouldRegisterNavigation = false;

}
