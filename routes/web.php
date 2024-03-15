<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|->middleware('auth')
*/
Route::get('/produtos', [ProdutoController::class,'show'])->name('produto.lista');

Route::get('/produtos/formulario', [ProdutoController::class,'index'])->name('produto.formulario');
Route::get('/produtos/formulario/{id}', [ProdutoController::class,'edit'])->name('produto.formulario.edit')->middleware('auth');
Route::post('/produtos/insere', [ProdutoController::class,'create'])->name('produto.insere');
Route::post('/produtos/edicao/{id}', [ProdutoController::class,'update'])->name('produto.edicao')->middleware('auth');
Route::post('/produtos/exclusao/{id}', [ProdutoController::class,'delete'])->name('produto.exclusao')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
