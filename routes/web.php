<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});




// Show form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle form submission
Route::post('/register', [RegisterController::class, 'register']);
