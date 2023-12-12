<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index'); })->name('home');
Route::get('services/{slug}', 'App\Http\Controllers\PageController@service')->name('services');
Route::get('about-us', 'App\Http\Controllers\PageController@aboutUs')->name('about-us');
Route::get('contact-us', 'App\Http\Controllers\PageController@contactUs')->name('contact-us');
Route::post('contact-us', 'App\Http\Controllers\PageController@sendMail')->name('contact-us');
