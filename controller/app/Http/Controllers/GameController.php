<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $jogos = ["Subnautica 2", "Pokémon Go"];

        return view('lista_jogos', ['jogos' => $jogos]);
    }

    public function show($id) {
        return "Procurando pelo jogo: " . $id;
    }
}
