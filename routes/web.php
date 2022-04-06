<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/main', function () {
//     return view('welcome');
// });

Route::get('/users', [AdminController::class, 'user']);
Route::get('/viewchef', [AdminController::class, 'viewchef']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/uploadfood', [AdminController::class, 'uploadfood']);
Route::post('/uploadchef', [AdminController::class, 'uploadchef']);
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deleteMenu']);
Route::get('/deleteUsers/{id}', [AdminController::class, 'deleteUsers']);
Route::get('/viewreservation', [AdminController::class, 'viewreservation']);

Route::get('/', [HomeController::class , 'index']);
Route::get('redirects', [HomeController::class , 'redirects']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


