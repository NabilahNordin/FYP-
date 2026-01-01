<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if(auth()->user()){
         return redirect(url('/admin'));
    }else{
        return view('welcome');

    }
});
