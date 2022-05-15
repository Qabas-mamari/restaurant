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

// @Qabas-mamari
// 

Route::get('/users', [AdminController::class, 'user']);
Route::get('/deleteUsers/{id}', [AdminController::class, 'deleteUsers']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/uploadfood', [AdminController::class, 'uploadfood']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deleteMenu']);

Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/viewreservation', [AdminController::class, 'viewreservation']);

##  Laravel_Tips

// Before
// Route::get('/viewchef', [AdminController::class, 'viewchef']);
// Route::post('/uploadchef', [AdminController::class, 'uploadchef']);
// Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);
// Route::post('updatefoodchef/{id}', [AdminController::class, 'updatefoodchef']);
// Route::get('deletechef/{id}', [AdminController::class, 'deletechef']);


// After
Route::controller(AdminController::class)->group(function (){
    Route::get('/viewchef', 'viewchef');
    Route::post('/uploadchef', 'uploadchef');
    Route::get('/updatechef/{id}', 'updatechef');
    Route::post('updatefoodchef/{id}', 'updatefoodchef');
    Route::get('deletechef/{id}', 'deletechef');
});


// Route::get('/', [HomeController::class , 'index']);
// Route::post('addcart/{id}', [HomeController::class, 'addcart']);
// Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

Route::controller(HomeController::class)->group(function (){
    Route::get('/' , 'index');
    Route::post('addcart/{id}', 'addcart');
    Route::get('/showcart/{id}', 'showcart');
    Route::get('remove/{id}', 'remove');
});

Route::get('redirects', [HomeController::class , 'redirects']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


