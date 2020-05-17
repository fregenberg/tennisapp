<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'MatchdayController@index')->middleware('auth');
Route::get('/alletermine', 'MatchdayController@index')->middleware('auth');

Route::get('/termine/bearbeiten', function () {
    return view('matchdays.edit');
})->middleware('auth');
// Route::get('/termine/bearbeiten', 'MatchdayController@edit')->middleware('auth');

Route::get('/termine/erstellen', 'MatchdayController@create')->middleware('auth');


Route::get('/allespieler', 'PlayerController@index')->middleware('auth');

Route::get('/spieler', function () {
    return view('players.show');
})->middleware('auth');
// Route::get('/spieler', 'PlayerController@show')->middleware('auth');

Route::get('/spieler/bearbeiten', function () {
    return view('players.edit');
})->middleware('auth');
// Route::get('/spieler/bearbeiten', 'PlayerController@edit')->middleware('auth');

Route::get('/spieler/erstellen', 'PlayerController@create')->middleware('auth');


Route::get('/planer', function () {
    return view('planner.planner');
})->middleware('auth');
// Route::get('/planer', 'MatchdayController@show')->middleware('auth');

Route::get('/presentation', function () {
    return view('presentation');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
