<?php

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

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/welcome', 'RegisterController@getNama');

Route::get('/master', function () {
    return view('master');
});

Route::get('/', function () {
    return view("awal");
});

Route::get('/data-tables', function () {
    return view("datatables");
});
