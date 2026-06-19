<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/livros', [LivroController::class, 'index']);
Route::post('/livros', [LivroController::class, 'store']);
Route::delete('/livros/{id}', [LivroController::class, 'destroy']);
