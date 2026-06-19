<?php

namespace App\Http\Controllers;

// Importa o Model Livro para acessar os dados da tabela livros
use App\Models\Livro;

// Importa a classe Request para manipular dados enviados pelo usuário
use Illuminate\Http\Request;

/**
 * Controller responsável por gerenciar as operações
 * relacionadas aos livros.
 */
class LivroController extends Controller
{
    /**
     * Exibe a lista de todos os livros cadastrados.
     *
     * Método chamado normalmente ao acessar:
     * GET /livros
     */
    public function index()
    {
        // Busca todos os registros da tabela livros
        $livros = Livro::all();

        // Retorna a view "livros.index"
        // enviando a variável $livros para a página
        return view('livros.index', ['livros' => $livros]);
    }

    /**
     * Salva um novo livro no banco de dados.
     *
     * Método chamado normalmente por um formulário
     * enviado via POST.
     */
    public function store(Request $request)
    {
        // Cria um novo registro utilizando todos os
        // dados enviados pelo formulário
        Livro::create($request->all());

        // Redireciona o usuário para a listagem de livros
        return redirect('/livros');
    }

    /**
     * Remove um livro do banco de dados.
     *
     * Recebe o ID do livro que será excluído.
     */
    public function destroy($id)
    {
        // Procura o livro pelo ID
        // Se não encontrar, retorna erro 404
        Livro::findOrFail($id)->delete();

        // Após excluir, retorna para a listagem
        return redirect('/livros');
    }
}