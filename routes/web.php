<?php

use App\Http\controllers\DairyController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;

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

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerpost'])->name('registerpost');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginpost'])->name('loginpost');
Route::get('/create',[DairyController::class,'make'])->name('create');
Route::get('/home',[DairyController::class,'home'])->name('home');

Route::middleware('auth')->group(function(){


Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/profile',[DairyController::class,'profile'])->name('profile');
Route::get('/online',[DairyController::class,'online'])->name('online');
Route::get('/item',[DairyController::class,'item'])->name('item');
Route::get('/iron',[DairyController::class,'iron'])->name('iron');
Route::get('/store',[DairyController::class,'showStore'])->name('showStore');
Route::post('/store',[DairyController::class,'store'])->name('store');
Route::get('/edit/{id}',[DairyController::class,'edit'])->name('editDairy');
Route::post('/edit/{id}',[DairyController::class,'editPost'])->name('editPost');
Route::get('/delete/{id}',[DairyController::class,'delete'])->name('deleteDairy');
Route::get('/data',[DataController::class,'data'])->name('data');
});
Route::get('/adminpanel',[AdminController::class,'admin'])->name('admin');
Route::get('/no-acess',[DataController::class,'noacess'])->name('noacess');
