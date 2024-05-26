<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BonLivraisonController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Detail_blController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\ReglementController;
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
// Route::get('categoriesEdit/{id}', [ArticleController::class, 'edit'])->name('categoriesEdit.edit');

Route::resource('articles', ArticleController::class);
// Route::get('articlesEdit/{id}', [ArticleController::class, 'edit'])->name('articlesEdit.edit');

Route::resource('clients', ClientController::class);
// Route::get('clientsEdit/{id}',[ClientController::class,'edit'])->name('clientEdit.edit');

Route::resource('bonlivraisons', BonLivraisonController::class);
Route::resource('modes', ModeController::class);
Route::resource('reglements', ReglementController::class);
Route::resource('details', Detail_blController::class);


