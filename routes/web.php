<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/',[PostController::class, 'index'])->name('acceuil');
Route::get('/categorie',[PostController::class, 'categorie'])->name('categorie');

Route::get('/games/{id}', [PostController::class, 'defis'])->name('games.defis');
Route::post('/games', [PostController::class, 'create'])->name('games.create');
Route::get('/delete_defi', [PostController::class, 'delete'])->name('games.delete');

Route::get('games/edit/{id}', [PostController::class, 'modifier']);
Route::post('edit/', [PostController::class, 'update']);