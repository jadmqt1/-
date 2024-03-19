<?php

use App\Http\Controllers\GroupeController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StagiareController;
use App\Models\Note;
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
