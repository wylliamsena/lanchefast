<?php

use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function () {
route::get('/', \App\Livewire\Clientes\Index::class)->name('clientes.index');
route::get('/create', \App\Livewire\Clientes\Create::class)->name('clientes.create');
route::get('/{cliente}', \App\Livewire\Clientes\Show::class)->name('clientes.show');
route::get('/{cliente}/edit', \App\Livewire\Clientes\Edit::class)->name('clientes.edit');
});