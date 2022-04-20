<?php

use App\Http\Controllers\DupakController;
use Illuminate\Support\Facades\Route;

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
Route::controller(DupakController::class)->group(function(){
    Route::get('/dupak','index')->name('dupak.index');
    Route::get('/dupak/create')->name('dupak.create');
    Route::get('/dupak/{dupak}/edit')->name('dupak.edit');
});
