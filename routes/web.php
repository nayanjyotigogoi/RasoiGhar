<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
//home
Route::get('/', [HomeController::class, 'index']);
Route::get('home-recipe', [HomeController::class, 'showReceipe']);
Route::get('recipe-show/{id}', [HomeController::class, 'show'])->name('home.show');
//admin dashboard.
Route::get('admin', [AdminController::class, 'index']);
Route::get('recipe', [RecipeController::class, 'index']);
Route::get('add-recipe', [RecipeController::class, 'create']);
Route::post('recipes-create', [RecipeController::class, 'store']);
Route::get('view-receipe', [RecipeController::class, 'show']);
Route::get('delete-receipe/{id}', [RecipeController::class, 'destroy']);
Route::get('edit-recipes/{id}', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::post('update-recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');


//login
// Showing the login form
Route::get('Show-login', [AdminController::class, 'showLoginForm'])->name('loginForm');;

// Handle the login request
Route::post('my-login', [AdminController::class, 'my_login']);

// Handle logout
Route::post('logout', [AdminController::class, 'logout'])->name('logout');
