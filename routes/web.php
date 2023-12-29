<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CDocumentController;


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

Route::get('/', [CDocumentController::class, 'index'])->name('home');

Route::get('edit/{id}', [CDocumentController::class, 'editDocument']);
Route::patch('edit/{id}', [CDocumentController::class, 'update'])->name('update');

Route::delete('delete/{id}', [CDocumentController::class, 'delDocument'])->name('delete');
