<?php

use App\Http\Controllers\ProdutosController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('produtos')->group(function (){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
    //Criar Usuário
    Route::get('/create', [ProdutosController::class, 'create'])->name('produto.create');
    Route::post('/create', [ProdutosController::class, 'create'])->name('produto.create');
    //Atualizar Usuário
    Route::get('/updateUser/{id}', [ProdutosController::class, 'update'])->name('produto.update');
    Route::put('/updateUser/{id}', [ProdutosController::class, 'update'])->name('produto.update');
});