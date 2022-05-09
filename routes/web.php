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

Route::get('/ok', function () {
    return "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam tenetur itaque maxime nulla autem explicabo ducimus, qui, doloribus recusandae tempora dolorum possimus dignissimos dolorem quidem vel omnis, ipsam inventore odit.";
});
