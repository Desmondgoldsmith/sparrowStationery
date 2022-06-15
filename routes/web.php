<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/category',[categoryController::class,'Category']);



Route::post('/categoryAdd',[categoryController::class,'createCategory']);

Route::get('/category-create',[categoryController::class,'create']);

Route::get('/', [App\Http\Controllers\clientController::class, 'home'])->name('home');
Route::get('/shop',[clientController::class,'shop' ]);
Route::get('/details',[clientController::class,'details' ]);
Route::get('/admin',[AdminController::class,'dashboard']);
