<?php

use App\Http\Controllers\CodeController;
use App\Models\Code;
use Illuminate\Database\Eloquent\Builder;
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

Route::get('/', [CodeController::class, 'index'])->name('index');
Route::post('/', [CodeController::class, 'store'])->name('store');
Route::get('/{code:hash}', [CodeController::class, 'show'])->name('show');
Route::get('/{code:hash}/unlock', [CodeController::class, 'password'])->name('password');
Route::post('/{code:hash}/unlock', [CodeController::class, 'unlock'])->name('unlock');
