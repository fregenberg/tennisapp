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

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'MatchdayController@index')->name('home');
    // Route::get('/alletermine', 'MatchdayController@index')->name('home');

    Route::get('/termine/erstellen', 'MatchdayController@create')->name('matchdays.create');
    Route::post('/termine/erstellen', 'MatchdayController@store')->name('matchdays.store');

    Route::get('/termine/bearbeiten/{matchday}', 'MatchdayController@edit')->name('matchdays.edit');
    // // Route::get('/termine/{matchday}/bearbeiten', 'MatchdayController@edit')->name('matchdays.edit');
    Route::patch('/termine/{matchday}', 'MatchdayController@update')->name('matchdays.update');
    Route::delete('/termine/{matchday}', 'MatchdayController@destroy')->name('matchdays.destroy');


    Route::get('/allespieler', 'PlayerController@index')->name('players.index');

    Route::get('/spieler/erstellen', 'PlayerController@create')->name('players.create');
    Route::post('/spieler/erstellen', 'PlayerController@store')->name('players.store');

    Route::get('/spieler/{player}', 'PlayerController@show')->name('players.show');
    Route::get('/spieler/bearbeiten/{player}', 'PlayerController@edit')->name('players.edit');
    // Route::get('/spieler/{player}/bearbeiten', 'PlayerController@edit')->name('players.edit');
    Route::patch('/spieler/{player}', 'PlayerController@update')->name('players.update');
    Route::delete('/spieler/{player}', 'PlayerController@destroy')->name('players.destroy');


    Route::get('/alleplaner', 'PlannerController@index')->name('planner.index');

    Route::get('/planer', 'PlannerController@show')->name('planner.show');

    Route::get('planer/bearbeiten/{matchday}', 'PlannerController@edit')->name('planner.edit');
    Route::patch('/planer/{matchday}', 'PlannerController@update')->name('planner.update');
});
