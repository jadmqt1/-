<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Route::resource('categories', CategorieController::class);
Route::resource('articles', ArticleController::class);
Route::get('articleEdit/{id}', [ArticleController::class, 'edit'])->name('articlesEdit.edit');

Route::resource('clients', ClientController::class);
Route::get('clientEdit/{id}',[ClientController::class,'edit'])->name('clientEdit.edit');
// Route::put('client/{id}',[ClientController::class,'update'])->name('client.update');

