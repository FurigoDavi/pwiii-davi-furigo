<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<body>
    <h1>Meus Livros</h1>

    <form action="/livros" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título" required><br><br>
        <input type="text" name="autor" placeholder="Autor" required><br><br>
        <input type="number" name="ano_publicacao" placeholder="Ano" required><br><br>
        <input type="text" name="genero" placeholder="Gênero" required><br><br>
        <button type="submit">Adicionar</button>
    </form>

    <hr>

    @foreach ($livros as $livro)
        <p>
            <strong>{{ $livro->titulo }}</strong> — {{ $livro->autor }} 
            ({{ $livro->ano_publicacao }}) — {{ $livro->genero }}
            <form action="/livros/{{ $livro->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </p>
    @endforeach
</body>
</html>