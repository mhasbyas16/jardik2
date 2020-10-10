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

// Route::get('/', function () {
//     return view('index');
// })->name("undangan.index");

Route::resource('/', 'indexController');
Route::resource('private', 'privateController');
Route::resource('pesan', 'pesanController');
Route::resource('hadiah', 'hadiahController');
