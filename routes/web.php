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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Indri Tania Lestari",
        "email" => "Indri.22304009@mail.ac.unpad.id",
        "image" => "dokja.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});

Route::get('/contact', function () {
    return view('contact');
});