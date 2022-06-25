<?php

use App\Http\Controllers\DupakController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::fallback(function () {
    return view('fallback');
});


Route::controller(DupakController::class)->group(function () {
    Route::get('/dupak', 'index')->name('dupak.index');
    Route::get('/dupak/create')->name('dupak.create');
    Route::get('/dupak/{dupak}/edit')->name('dupak.edit');
});

// =========================SIGNUP================================
Route::controller(AuthController::class)->group(function () {
    Route::get('/signup', 'signup1');
    Route::post('/signup', 'signup2');
    Route::get('/signin', 'signin1');
    Route::post('/signin', 'signin2');
    Route::get('/forgot-pass', 'forgot1');
    Route::post('/forgot-pass', 'forgot2');
    Route::get('/reset-pass/{token}', 'reset1');
    Route::post('/reset-pass', 'reset2');
    Route::get('/logout', 'logout');
});

// =========================DASHBOARD USER=========================
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/dashboard/chg-pass', 'chgPass');
    Route::get('/dashboard/contact-us', 'contactUs');
});
// ->middleware('auth');

// =========================DASHBOARD ADMIN=========================
