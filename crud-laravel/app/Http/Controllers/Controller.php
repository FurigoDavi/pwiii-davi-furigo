<?php

namespace App\Http\Controllers;

/**
 * Classe base para todos os controllers da aplicação.
 *
 * Os controllers específicos (como LivroController,
 * UserController, ProdutoController, etc.) normalmente
 * herdam desta classe.
 *
 * O modificador "abstract" indica que esta classe
 * não pode ser instanciada diretamente, servindo
 * apenas como base para outras classes.
 */
abstract class Controller
{
    /**
     * Neste caso a classe está vazia.
     *
     * Em projetos maiores, métodos ou configurações
     * comuns a todos os controllers podem ser adicionados aqui.
     */
}