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

Route::get('/alletermine', function () {
    return view('home');
});

Route::get('/termine/edit', function () {
    return view('matchdays.edit');
});

Route::get('/termine/create', 'MatchdayController@create');

Route::get('/allespieler', 'PlayerController@index');

Route::get('/spieler', function () {
    return view('players.show');
});

Route::get('/spieler/edit', function () {
    return view('players.edit');
});

Route::get('/spieler/create', 'PlayerController@create');

Route::get('/planer', function () {
    return view('planner.planner');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});
