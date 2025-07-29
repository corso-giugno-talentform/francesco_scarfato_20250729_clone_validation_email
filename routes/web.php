<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'homepage'])->name('homepage');
Route::get('/product/{product}', [BlogController::class, 'product'])->name('prodotto');
Route::get('/contact-us', [BlogController::class, 'contact'])->name('contact');
Route::post('/contact-send', [BlogController::class, 'send'])->name('send');
