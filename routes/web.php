<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\myformcontroller;
use App\Http\Controllers\filecontroller;
use App\Http\Controllers\filecontroller1;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\GoatController;
use App\Http\Controllers\AuthController;
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
Route::get('/form', function () {
    return view('form');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/myform', function () {
    return view('myform');
});
Route::get('/myform', function () {
    return view('myform');
});

Route::get('/fileupload', function () {
    return view('fileupload');
});
Route::get('/fileupload1', function () {
    return view('fileupload1');
});
Route::get('/product', function () {
    return view('product');
});


// Route::get('/form', [formcontroller::class,'task']);
Route::post('/submit', [formcontroller::class,'form']);
Route::post('/formsubmit', [myformcontroller::class,'myform']);


Route::post('/fileupload', [filecontroller::class,'submit']);
Route::post('/fileupload1', [filecontroller1::class,'submit']);
Route::post('/product', [productcontroller::class,'submit']);

Route::get('/item',function(){

    return view('item');
});

Route::post('/item',[ItemController::class,'save_item']);
Route::get('/itemshow',[ItemController::class,'show_item']);
Route::get('/edititem/{id}',[ItemController::class,'edit_item']);
Route::post('/edititem/{id}',[ItemController::class,'update_item']);
Route::get('/deleteitem/{id}',[ItemController::class,'delete_item']);

Route::middleware(['auth'])->group(function (){

    Route::get('/goat',[GoatController::class,'goats']);


});
Route::post('/goat',[GoatController::class,'goat']);
Route::get('/register',function (){
    return view('register');
});
Route::get('/myregister',function (){
    return view('myregister');
});
// Route::post('/register',[AuthController::class,'register']);
Route::post('/myregister',[AuthController::class,'myregister']);

// Route::get('login',function (){
//     return view('login');
// })->name('login');
// Route::post('/login',[AuthController::class,'login']);
// // Route::get('/logout',[AuthController::class,'logout']);

Route::get('/data',function(){
    return view('send');
});