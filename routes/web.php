<?php

use App\Http\Controllers\CodeController;
use App\Http\Controllers\MyCodeController;
use Illuminate\Support\Facades\Route;
use App\Models\Code;

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
    return view('index', [
        'title' => 'My Code'
    ]);
});

Route::resource('/codes', MyCodeController::class)->middleware(['auth']);
Route::get('/codes/{code:slug}', [MyCodeController::class, 'show']);

Route::get('/continue', [CodeController::class, 'index'])->middleware(['guest']);
Route::get('/add', [CodeController::class, 'create'])->middleware(['guest']);
Route::post('/add', [CodeController::class, 'store'])->middleware(['guest']);

require __DIR__.'/auth.php';
