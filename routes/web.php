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

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view(
    'gallery',
    ['name' => ['Novel', 'Iphone', 'Troli', 'Mouse1', 'Mouse2', 'Mouse3']]
));
