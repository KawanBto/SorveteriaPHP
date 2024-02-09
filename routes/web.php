<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProdutoController;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;

Route::get('/index',[ClienteController::class,'index'])->name('index');

//Cadastro
Route::get('/cadastrarCliente',[ClienteController::class,'showFormCliente'])->name('formulario-cliente');
Route::post('/cadastrarCliente',[ClienteController::class,'storeCliente'])->name('cadastrar-cliente');

Route::get('/cadastrarProduto',[ProdutoController::class,'showFormProduto'])->name('formulario-produto');
Route::post('/cadastrarProduto',[ProdutoController::class,'storeProduto'])->name('cadastrar-produto');

Route::get('/cadastrarPagamento',[PagamentoController::class,'showFormPagamento'])->name('formulario-pagamento');
Route::post('/cadastrarPagamento',[PagamentoController::class,'storePagamento'])->name('cadastrar-pagamento');

//busca
Route::get('/todoscliente',[ClienteController::class,'showGerenciadorCliente'])->name('todos-cliente');
Route::get('/todosproduto',[ProdutoController::class,'showGerenciadorProduto'])->name('todos-produto');
Route::get('/todospagamento',[PagamentoController::class,'showGerenciadorPagamento'])->name('todos-pagamento');

//deletar
Route::delete('/delete-cliente/{id}',[ClienteController::class,'destroyCliente'])->name('delete-cliente');
Route::delete('/delete-produto/{id}',[ProdutoController::class,'destroyProduto'])->name('delete-produto');
Route::delete('/delete-pagamento/{id}',[PagamentoController::class,'destroyPagamento'])->name('delete-pagamento');

//alterar
Route::get('/alterarCliente/{id}',[ClienteController::class,'showCliente'])->name('alterar-cliente');
Route::get('/alterarProduto/{id}',[ProdutoController::class,'showProduto'])->name('alterar-produto');
Route::get('/alterarPagamento/{id}',[PagamentoController::class,'showPagamento'])->name('alterar-pagamento');

Route::put('/alterarBancoCliente/{id}',[ClienteController::class,'updateCliente'])->name('alterarBanco-cliente');
Route::put('/alterarBancoProduto/{id}',[ProdutoController::class,'updateProduto'])->name('alterarBanco-produto');
Route::put('/alterarBancoPagamento/{id}',[PagamentoController::class,'updatePagamento'])->name('alterarBanco-pagamento');