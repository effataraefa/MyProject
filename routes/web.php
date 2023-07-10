<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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


Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

// ......................................................................................


Route::get('/category',[CategoryController::class,'categories'])->name('catrgories');
Route::get('/category-index',[CategoryController::class,'index'])->name('category.index');
Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');


// ......................................................................................

Route::get('/product',[ProductController::class,'list'])->name('product.list');
Route::get('/create-product-form',[ProductController::class,'createForm'])->name('product.create.form');
    

Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');