<?php
use App\Http\controllers\DairyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/',[DairyController::class,'index'])->name('welcome');
Route::get('/create',[DairyController::class,'make'])->name('create');
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
