<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\productController;
use App\Http\Controllers\sliderController;
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



Route::post('/categoryAdd',[categoryController::class,'createCategory']);//processes the form
Route::post('/categoryUpdate',[categoryController::class,'updateCategory']);//processes the update category form
Route::get('/category-create',[categoryController::class,'create']);//display the create category page
Route::get('/updateCategory-view/{id}',[categoryController::class,'view_UpdateCategory']);//display the update category page
Route::get('/view-category',[categoryController::class,'displayCategories']); //display a list of all categories
Route::get('/delete-category/{id}',[categoryController::class,'deleteCategory']); //delete a category

Route::get('/', [App\Http\Controllers\clientController::class, 'home'])->name('home');
Route::get('/shop',[clientController::class,'shop' ]);
Route::get('/details',[clientController::class,'details' ]);


Route::get('/admin',[AdminController::class,'dashboard']);

Route::get('/view-addProduct',[productController::class,'create']);//display the addProduct page
Route::post('/add_product',[productController::class,'store']);
Route::get('/view-products',[productController::class,'index']);//display all products page
Route::get('/view-updateProduct/{id}',[productController::class,'edit']);//display update products page
Route::get('/delete-Product/{id}',[productController::class,'destroy']);//delete  products 
Route::post('/update-product',[productController::class,'update']);//backend for update products page

Route::get('/view-sliderForm',[sliderController::class,'create']);//view slider form
Route::post('/add-slider',[sliderController::class,'store']);//backend for slider form{save}
Route::get('/view-allSlider',[sliderController::class,'index']);//backend for slider form{save}
Route::get('/view-updateSlider/{id}',[sliderController::class,'edit']);//view for slider form{update}
Route::post('/view-updateSlider',[sliderController::class,'update']);//backend for slider form{update}
Route::get('/delete-slider/{id}',[sliderController::class,'destroy']);//delete  slider 
