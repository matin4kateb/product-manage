<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Monolog\Registry;

Route::get('/', [GeneralController::class, 'index'] )->name('index');
Route::get('contact', [GeneralController::class, 'contact'])->name('contact');
Route::get('about', [GeneralController::class, 'about'])->name('about');
Route::get('faq', [GeneralController::class, 'faq'])->name('faq');



Route::get('login', [LoginController::class, 'show'] )->name('login');
Route::post('login', [LoginController::class, 'login'] );


Route::get('register', [RegisterController::class, 'show'] )->name('register');
Route::post('register', [RegisterController::class, 'store'] );


Route::middleware('auth')->group(function() {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');  // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('product/add', [ProductController::class, 'add'])->name('product.add');
    // Route::get('product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('product/view', [ProductController::class, 'viewProds'])->name('product.view');

    Route::put('product/{product}/update', [ProductController::class, 'updateAction']);
    Route::delete('product/{product}/delete', [ProductController::class, 'deleteAction'])->name('product.delete');
    Route::post('product/add', [ProductController::class, 'addAction'])->name('product.add.action');
});