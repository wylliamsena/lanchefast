<?php

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;
use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function () {
route::get('/', \App\Livewire\Clientes\Index::class)->name('clientes.index');
route::get('/create', \App\Livewire\Clientes\Create::class)->name('clientes.create');
route::get('/{cliente}/edit', \App\Livewire\Clientes\Edit::class)->name('clientes.edit');
route::get('/{id}', \App\Livewire\Clientes\Show::class)->name('clientes.show');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', ProdutoIndex::class)->name('produtos.index');
    Route::get('/create', ProdutoCreate::class)->name('produtos.create');
    Route::get('/{produto}', ProdutoShow::class)->name('produtos.show');
    Route::get('/{produto}/edit', ProdutoEdit::class)->name('produtos.edit');
});