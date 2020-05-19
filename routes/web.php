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

<<<<<<< HEAD
Route::get('/', 'MatchdayController@index');
Route::get('/alletermine', 'MatchdayController@index');

Route::get('/termine/bearbeiten', function () {
    return view('matchdays.edit');
});

Route::get('/termine/erstellen', 'MatchdayController@create');

Route::get('/allespieler', 'PlayerController@index');

Route::get('/spieler', function () {
    return view('players.show');
});

Route::get('/spieler/bearbeiten', function () {
    return view('players.edit');
});

Route::get('/spieler/erstellen', 'PlayerController@create');

Route::get('/planer', function () {
    return view('planner.planner');
=======
Route::get('/presentation', function () {
    return view('presentation');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'MatchdayController@index')->name('home');
    Route::get('/alletermine', 'MatchdayController@index')->name('home');

    Route::get('/termine/erstellen', 'MatchdayController@create')->name('matchdays.create');

    Route::get('/termine/bearbeiten', 'MatchdayController@edit')->name('matchdays.edit');


    Route::get('/allespieler', 'PlayerController@index')->name('players.index');

    Route::get('/spieler/erstellen', 'PlayerController@create')->name('players.create');

    Route::get('/spieler/bearbeiten', 'PlayerController@edit')->name('players.edit');

    Route::get('/spieler/{player}', 'PlayerController@show')->name('players.show');


    Route::get('/planer', function () {
        return view('planner/planner');
    })->name('planner.planner');
    // Route::get('/planer', 'MatchdayController@show');
>>>>>>> dev
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
