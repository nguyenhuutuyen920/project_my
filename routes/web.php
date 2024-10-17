<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('admin.index');
    Route::get('/info.index', [PostController::class, 'index'])->name('info.index');
    Route::get('/info.create', [PostController::class, 'create'])->name('info.create');
    Route::post('/info.store', [PostController::class, 'store'])->name('info.store');
    Route::post('/info.update', [PostController::class, 'update'])->name('info.update');
    Route::post('/info.destroy', [PostController::class, 'destroy'])->name('info.destroy');

});
Route::get('/infomation', [HomeController::class, 'infomation'])->name('infomation.infomation');
