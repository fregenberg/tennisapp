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

Route::get('/presentation', function () {
    return view('presentation');
});


Route::group(['middleware' => 'loggedin'], function () {
    Route::get('/', 'MatchdayController@index');
    Route::get('/alletermine', 'MatchdayController@index');

    Route::get('/termine/erstellen', 'MatchdayController@create');

    Route::get('/termine/bearbeiten', function () {
        return view('matchdays/edit');
    });
    // Route::get('/termine/bearbeiten', 'MatchdayController@edit');


    Route::get('/allespieler', 'PlayerController@index');

    Route::get('/spieler/erstellen', 'PlayerController@create');

    Route::get('/spieler/bearbeiten', function () {
        return view('players.edit');
    });
    // Route::get('/spieler/bearbeiten', 'PlayerController@edit');

    Route::get('/spieler/{player}', 'PlayerController@show');


    Route::get('/planer', function () {
        return view('planner/planner');
    });
    // Route::get('/planer', 'MatchdayController@show');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
