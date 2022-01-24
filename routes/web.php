<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MessagesController;


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
Route::get('/statistiques', function () {
    return view('statistiques');
});
Route::get('/nouvelles', function () {
    return view('nouvelles');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aproposdenous', function () {
    return view('aboutus');
});
Route::get('/aproposducorona', function () {
    return view('aboutcovid');
});

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/statistiques/{country}', 'ApiController@main');
Route::get('/statistiques', 'ApiController@main');

