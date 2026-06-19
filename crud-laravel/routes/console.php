<?php

// Importa a classe que fornece frases motivacionais
use Illuminate\Foundation\Inspiring;

// Importa a facade Artisan para criação de comandos
use Illuminate\Support\Facades\Artisan;

/**
 * Cria um comando Artisan chamado "inspire".
 *
 * Para executá-lo no terminal:
 * php artisan inspire
 */
Artisan::command('inspire', function () {

    /**
     * Exibe no terminal uma frase inspiradora.
     *
     * O método quote() retorna uma citação aleatória
     * fornecida pela classe Inspiring.
     */
    $this->comment(Inspiring::quote());

})

/**
 * Define a descrição do comando.
 *
 * Essa descrição aparece quando executamos:
 * php artisan list
 * ou
 * php artisan help inspire
 */
->purpose('Display an inspiring quote');