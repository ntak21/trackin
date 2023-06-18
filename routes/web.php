<?php

use App\Http\Controllers\KantinController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Models\Kntin;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

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


//Route::get('/home', ['KantinController@show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[KantinController::class,'home']);

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/home-administrator', [KantinController::class, 'showkantin']);


Route::get('/filter-anda-sukai', [KantinController::class, 'filter_sukai']);

Route::get('/filter-rekomendasi', [KantinController::class, 'filter_rekomendasi']);

Route::get('/filter-tag', function(){
    return view('filter-tag');
});

Route::get('/info-menu', function(){
    return view('info-menu');
});

Route::get('/info-tempat', function(){
    return view('info-tempat');
});

Route::get('/info-foto', function(){
    return view('info-foto');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/detail-kantin', function () {
    return view('detail-kantin');
});

Route::get('review', function () {
    return view('review');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/upload-menu', function(){
    return view('upload-menu');
});

Route::get('/info-menu', function () {
    return view('info-menu');
});

Route::get('/upload', 'App\Http\Controllers\UploadController@upload');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@proses_upload');


Route::get('/upload-menu', 'App\Http\Controllers\UploadMenu@upload');
Route::post('/upload-menu/proses', 'App\Http\Controllers\UploadMenu@proses_upload');

Route::get('/review', 'App\Http\Controllers\ReviewController@upload');
Route::post('/review/proses', 'App\Http\Controllers\ReviewController@proses_upload');
//