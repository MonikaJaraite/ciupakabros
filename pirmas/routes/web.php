<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PirmasController;

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
    return view('welcome');
});

Route::get('/labas', fn() => '<h1 style="color:crimson;">LABAS<h1>');

// Route::get('/labas/briedi', fn() => '<h1 style="color:crimson;">LABAS, BRIEDI<h1>');

Route::prefix('labas')->group(function () {

    Route::get('/briedi', [PirmasController::class, 'hello'])->name('briedis');
    Route::get('/vovere', [PirmasController::class, 'helloV']);
    Route::get('/{animal}', [PirmasController::class, 'helloAnimal']);
    Route::get('/{animal}/{color}/color', [PirmasController::class, 'helloFancy'])->name('fancy');

});

Route::get('/sum/{a}/{b?}', [PirmasController::class, 'sum']);