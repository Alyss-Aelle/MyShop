<?php

use Illuminate\Support\Facades\Route;
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



    Route::get('/', [ProductController::class, 'index'])->name('accueil ');
    //filtre par categorie
    Route::get('/filtre/{categorie}', [ProductController::class, 'index'])->name('filtre.categorie');
    //detail
    Route::get('/detail/{product}', [ProductController::class, 'detail'])->name('accueil.detail');
    //detail
    Route::get('/addtocart/{product}', [ProductController::class, 'addToCart'])->name('addtocart');
