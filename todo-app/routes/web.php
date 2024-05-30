<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Todo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', Register::class)->middleware('guest');

Route::get('/login', Login::class)->middleware('guest')->name('login');

Route::get('/todo', Todo::class)->middleware('auth');

Route::get('/dashboard', Dashboard::class)->middleware('auth');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});