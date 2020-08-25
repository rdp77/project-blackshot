<?php

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
    return view('home');
});

Route::get('/ranking-player', function () {
    return view('pages.ranking-player');
})->name('rankingplayer');

Route::get('/ranking-clan', function () {
    return view('pages.ranking-clan');
})->name('rankingclan');

Route::get('/download', function () {
    return view('pages.download');
})->name('download');

Route::get('/donasi', function () {
    return view('pages.donation');
})->name('donasi');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
