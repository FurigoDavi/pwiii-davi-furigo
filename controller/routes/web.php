<?php

use app\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

//Quando o usuário acessar seu-site.com/livros,
//o método 'index' do controller entra em ação!
Route::get('/livros', [LivroController::class, 'index']);

