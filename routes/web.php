<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function() {
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/register', 'register');
});
Route::livewire('/', 'home')->name('home')->middleware('auth');
