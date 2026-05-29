<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    //O método "index" geralmente serve para listar coisas
    public function index() {
        $livros = ["Harry Potter", "Percy Jackson", "O Hobbit"];

        //O garçom entrega a "view" (a página) com a lista de livros
        return view('lista_livros', ['livros' => $livros]);
       }

       //O método "show usa um livro específico"
       public function show($id) {
        return "Você está vendos os detalhes do livro número: ". $id;
       }
}
