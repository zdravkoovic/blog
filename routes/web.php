<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function (){
    return 'Login stranica';
})->name('login');


Route::get('/dashboard', function () {
    return 'Dashboard stranica';
})->name('dashboard');
