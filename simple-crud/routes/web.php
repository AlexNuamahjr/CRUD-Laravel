<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClientController::class, 'index'])->name('clients.index');
Route::get('/add', [ClientController::class, 'add'])->name('clients.add');
Route::post('/add', [ClientController::class, 'save'])->name('clients.save');
Route::get('/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/{client}/update', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/{client}/delete', [ClientController::class, 'destroy'])->name('clients.destroy');
