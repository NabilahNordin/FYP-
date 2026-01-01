<?php

use App\Filament\Pages\Login2faPage;
use App\Filament\Pages\Welcome;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if(auth()->user()){
         return redirect(url('/admin'));
    }else{
        return redirect(url('/admin/welcome'));
    }
});


Route::middleware(['guest'])->group(function () {
    Route::get('/admin/welcome', Welcome::class);
    Route::get('/admin/login2fa-page', Login2faPage::class)->name('filament.admin.pages.login2fa-page');
});
