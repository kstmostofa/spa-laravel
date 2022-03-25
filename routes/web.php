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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage-setting', 'HomePageController@index')->name('homepage-setting');
Route::post('/addSlider', 'HomePageController@addSlider')->name('addSlider');
Route::get('/slider/destroy/{id}', 'HomePageController@deleteSlider')->name('deleteSlider');
// Route::resource('homePage', HomePageController::class);
