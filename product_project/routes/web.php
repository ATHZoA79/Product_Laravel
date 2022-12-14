<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('/product')->group(function () {
	Route::get('/', [ProductController::class, 'index']);
	Route::get('/create', [ProductController::class, 'create']);
	Route::post('/store', [ProductController::class, 'store']);
	Route::get('/edit/{id}', [ProductController::class, 'edit']);
	Route::post('/update/{id}', [ProductController::class, 'update']);
	Route::delete('/destroy/{id}', [ProductController::class, 'destroy']);
});
