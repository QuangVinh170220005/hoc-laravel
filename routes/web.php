<?php

use App\Http\Controllers\Democontroller;
use App\Models\Demo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bongda', function(){
    return 'Messi là Goat';
});

Route::get('thoitrang', function(){
    return 'Thời trang';
});

// Route::get('index', [Democontroller::class, 'index']);

Route::get('demo', [Democontroller::class, 'index']);

Route::get('/login', [Democontroller::class, 'getLogin']);
Route::post('/login', [Democontroller::class, 'postLogin']);

Route::get('/home', function(){
    return view('home');
});
Route::get('/home/cart', function(){
    return view('cart');
});
Route::get('/home/account', function(){
    return view('account');
});
