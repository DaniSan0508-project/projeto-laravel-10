<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\VendasController;
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

Route::prefix('clientes')->group(function (){
    Route::get('/', [ClientesController::class, 'index'])->name('cliente.index');
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
    //Criar Cliente
    Route::get('/create', [ClientesController::class, 'create'])->name('cliente.create');
    Route::post('/create', [ClientesController::class, 'create'])->name('cliente.create');
    //Atualizar Cliente
    Route::get('/updateClient/{id}', [ClientesController::class, 'update'])->name('cliente.update');
    Route::put('/updateClient/{id}', [ClientesController::class, 'update'])->name('cliente.update');
});

Route::prefix('vendas')->group(function (){
    Route::get('/', [VendasController::class, 'index'])->name('venda.index');
    Route::delete('/delete', [VendasController::class, 'delete'])->name('venda.delete');
    //Criar Cliente
    Route::get('/create', [VendasController::class, 'create'])->name('venda.create');
    Route::post('/create', [VendasController::class, 'create'])->name('venda.create');
});