<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/about/all/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('about-data-one');
Route::get('/about/all/{id}/update', 'App\Http\Controllers\ContactController@updateMessage')->name('about-update');
Route::post('/about/all/{id}/update', 'App\Http\Controllers\ContactController@updateMessageSubmit')->name('about-update-submit');
Route::get('/about/all/{id}/delete', 'App\Http\Controllers\ContactController@deleteMessage')->name('about-delete');
Route::get('/about/all', 'App\Http\Controllers\ContactController@allData')->name('about-data');
Route::post('/about/submit', 'App\Http\Controllers\ContactController@submit')->name('about-form');

