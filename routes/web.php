<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use GuzzleHttp\Middleware;

Auth::routes();
// Route::view('/', 'homepage');


// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/', [PagesController::class, 'homepage'])->name('home');

Route::group(['middleware' => 'auth'], function () {

  Route::get('dashboard', [PagesController::class, 'index'])->name('dashboard');

  Route::get('beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');

  Route::get('magang', [MagangController::class, 'index'])->name('magang');

  Route::get('dbeasiswa/{beasiswa}', [BeasiswaController::class, 'show'])->name('dbeasiswa');

  Route::get('dmagang/{magang}', [MagangController::class, 'show'])->name('dmagang');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
