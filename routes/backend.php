<?php

use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
*/

Route::controller(MemberController::class)->group(function(){

    Route::get('/m/register', 'register')->name('frontend.register');
    Route::get('/m/login', 'login')->name('frontend.login');
    Route::post('sign-up/create', 'sign_up_create')->name('frontend.signup.create');
    Route::post('sign-up/check', 'sign_up_check')->name('frontend.signup.check');
    Route::post('/member-logout', 'logout')->name('frontend.logout');
});
