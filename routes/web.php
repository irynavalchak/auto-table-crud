<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//auto start
Route::get('/auto', [App\Http\Controllers\AutoController::class, 'index'])->name('auto.index');
Route::get('/auto/create', [App\Http\Controllers\AutoController::class, 'create'])->name('auto.create');
Route::post('/auto', [App\Http\Controllers\AutoController::class, 'store'])->name('auto.store');
Route::get('/auto/{auto}/edit', [App\Http\Controllers\AutoController::class, 'edit'])->name('auto.edit');
Route::patch('/auto/{auto}', [App\Http\Controllers\AutoController::class, 'update'])->name('auto.update');
Route::delete('/auto/{auto}', [App\Http\Controllers\AutoController::class, 'destroy'])->name('auto.delete');
//auto end
