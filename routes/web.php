<?php

use App\Http\Controllers\CauthuController;
use App\Http\Controllers\Democontroller;
use App\Models\Demo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list_cauthu', [CauthuController::class, 'listCT']);
Route::get('/add_cauthu', [CauthuController::class, 'addCT']);
Route::post('/add_cauthu', [CauthuController::class, 'store']);
Route::get('/edit_cauthu/{id}', [CauthuController::class, 'editCT']);
Route::post('/edit_cauthu/{id}', [CauthuController::class, 'update']);
Route::get('/delete_cauthu/{id}', [CauthuController::class, 'deleteCT']);










// Route::get('/bongda', function(){
//     return 'Messi là Goat';
// });

// Route::get('thoitrang', function(){
//     return 'Thời trang';
// });

// // Route::get('index', [Democontroller::class, 'index']);

// Route::get('demo', [Democontroller::class, 'index']);

// Route::get('/login', [Democontroller::class, 'getLogin']);
// Route::post('/login', [Democontroller::class, 'postLogin']);

// Route::get('/home', function(){
//     return view('home');
// });
// Route::get('/home/cart', function(){
//     return view('cart');
// });
// Route::get('/home/account', function(){
//     return view('account');
// });
// Route::get('query', function(){
//     $query = DB::table('products');
//     $row = $query -> get();
//     foreach($row as $r){
//         echo $r -> title . '<br>'; 
//     }
// });