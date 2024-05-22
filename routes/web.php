<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('test',[HomeController::class,'index'])->name('test');

Route::post('add_product', [HomeController::class, 'store'])->name('add_product');

Route::get('show_product',[HomeController::class,'show'])->name('show_product');

Route::get('delete_add_product/{id}',[HomeController::class,'delete'])->name('delete_add_product');


?>