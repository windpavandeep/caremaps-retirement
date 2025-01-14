<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home/{city}/{search}', function () {
    return view('home');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
