<?php
namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index() {
        $livros = Livro::all();
        return view('livros.index', ['livros' => $livros]);
    }

    public function store(Request $request) {
        Livro::create($request->all());
        return redirect('/livros');
    }

    public function destroy($id) {
        Livro::findOrFail($id)->delete();
        return redirect('/livros');
    }
}