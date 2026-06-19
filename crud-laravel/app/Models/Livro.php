<?php

namespace App\Models;

// Importa a classe base Model do Eloquent ORM
use Illuminate\Database\Eloquent\Model;

/**
 * Model responsável por representar a tabela "livros"
 * no banco de dados.
 *
 * Por convenção, o Laravel associará este model
 * à tabela "livros".
 */
class Livro extends Model
{
    /**
     * Define os campos que podem ser preenchidos em massa
     * (Mass Assignment).
     *
     * Isso permite utilizar métodos como:
     * Livro::create([...]);
     *
     * Sem essa definição, o Laravel bloquearia o
     * preenchimento desses atributos por segurança.
     */
    protected $fillable = [
        'titulo',          // Título do livro
        'autor',           // Nome do autor
        'ano_publicacao',  // Ano em que o livro foi publicado
        'genero'           // Gênero literário do livro
    ];
}