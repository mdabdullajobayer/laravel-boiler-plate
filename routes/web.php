<?php

use App\Http\Controllers\courses;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});


//Admin Panel Routes List 
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('dashboard', [HomeController::class, 'index'])->name('home');

    Route::resources([
        'roles' => RoleController::class,
        'users' => UserController::class,
        'products' => ProductController::class,
        'courses' => courses::class,
    ]);
});
//Admin Panel Routes List