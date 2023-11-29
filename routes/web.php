<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
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
    return view('welcome');
});


Route::get('index',[SupplierController::class,'index'])->name('index');
Route::post('supplier_post',[SupplierController::class,'supplier_post'])->name('supplier_post');
Route::post('item_post',[SupplierController::class,'item_post'])->name('item_post');
Route::post('purchase_order',[SupplierController::class,'purchase_order'])->name('purchase_order');

