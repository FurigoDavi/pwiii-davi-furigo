<?php

// Importa a facade Route, responsável por definir as rotas
use Illuminate\Support\Facades\Route;

// Importa o controller que irá tratar as requisições relacionadas aos livros
use App\Http\Controllers\LivroController;

/**
 * Rota para listar todos os livros.
 *
 * Método HTTP: GET
 * URL: /livros
 *
 * O método index() do LivroController será executado.
 */
Route::get('/livros', [LivroController::class, 'index']);

/**
 * Rota para cadastrar um novo livro.
 *
 * Método HTTP: POST
 * URL: /livros
 *
 * Geralmente é chamada quando um formulário
 * de cadastro é enviado.
 *
 * O método store() do LivroController será executado.
 */
Route::post('/livros', [LivroController::class, 'store']);

/**
 * Rota para excluir um livro.
 *
 * Método HTTP: DELETE
 * URL: /livros/{id}
 *
 * {id} é um parâmetro dinâmico que representa
 * o identificador do livro.
 *
 * Exemplo:
 * DELETE /livros/5
 *
 * O método destroy() do LivroController será executado,
 * recebendo o valor 5 como parâmetro.
 */
Route::delete('/livros/{id}', [LivroController::class, 'destroy']);