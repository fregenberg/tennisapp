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

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/alletermine', function () {
    return view('home');
});

Route::get('/termine/edit', function () {
    return view('matchdays.edit');
});

Route::get('/termine/create', function () {
    return view('matchdays.create');
});

Route::get('/allespieler', function () {
    return view('players.index');
});

Route::get('/spieler', function () {
    return view('players.show');
});

Route::get('/spieler/edit', function () {
    return view('players.edit');
});

Route::get('/spieler/create', function () {
    return view('players.create');
});

Route::get('/planer', function () {
    return view('planner.planner');
});
