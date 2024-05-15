<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/hello', function () {
    return 'Ygy';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Saya Prasetya, dan saat ini saya belajar laravel</p>';
});

Route::get('/siswa/rpl/pras', function () {
    echo '<h2 style="text-align:center;">Welcome to Laravel, Prasetya</h2>';
});