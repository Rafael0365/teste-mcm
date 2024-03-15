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

// ATENÇÃO!!! ao mover as rotas abaixo para dentro do middleware o deploy nao foi compilado corretamente, porem em localhost movendo elas para dentro do 
//middleware('auth')->group funcionam normalmente sem erro

Route::get('/produtos', [ProdutoController::class,'show'])->name('produto.lista');
Route::post('/produtos/insere', [ProdutoController::class,'create'])->name('produto.insere');
Route::post('/produtos/edicao/{id}', [ProdutoController::class,'update'])->name('produto.edicao');
Route::post('/produtos/exclusao/{id}', [ProdutoController::class,'delete'])->name('produto.exclusao');
Route::middleware('auth')->group(function () {
Route::get('/produtos/formulario', [ProdutoController::class,'index'])->name('produto.formulario');
Route::get('/produtos/formulario/{id}', [ProdutoController::class,'edit'])->name('produto.formulario.edit');
});


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
