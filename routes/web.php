<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('home-recipe', [HomeController::class, 'showReceipe']);
Route::get('recipe-show/{id}', [HomeController::class, 'show'])->name('home.show');
//admin dashboard.
// routes/web.php


Route::get('admin', [AdminController::class, 'index']);
Route::get('recipe', [RecipeController::class, 'index']);
Route::get('add-recipe', [RecipeController::class, 'create']);
Route::post('recipes-create', [RecipeController::class, 'store']);
Route::get('view-receipe', [RecipeController::class, 'show']);
Route::get('delete-receipe/{id}', [RecipeController::class, 'destroy']);
Route::get('edit-recipes/{id}', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::post('update-recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');

    // Route::post('recipes', [App\Http\Controllers\Admin\RecipeController::class, 'store'])->name('recipes.store');
   
    // Route::delete('recipes/{id}', [App\Http\Controllers\Admin\RecipeController::class, 'destroy'])->name('recipes.destroy');
