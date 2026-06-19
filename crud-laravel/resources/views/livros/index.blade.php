<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <!-- Título que aparece na aba do navegador -->
    <title>Livrinhos</title>
</head>

<body>

    <!-- Título principal da página -->
    <h1>My Books</h1>

    <!--
        Formulário para cadastrar um novo livro.

        action="/livros"
            → envia os dados para a rota POST /livros

        method="POST"
            → método HTTP usado para criar um novo registro no banco
    -->
    <form action="/livros" method="POST">

        <!-- Token de segurança obrigatório no Laravel (proteção CSRF) -->
        @csrf

        <!-- Campo título do livro -->
        <input type="text" name="titulo" placeholder="Título" required><br><br>

        <!-- Campo autor do livro -->
        <input type="text" name="autor" placeholder="Autor" required><br><br>

        <!-- Campo ano de publicação -->
        <input type="number" name="ano_publicacao" placeholder="Ano" required><br><br>

        <!-- Campo gênero do livro -->
        <input type="text" name="genero" placeholder="Gênero" required><br><br>

        <!-- Botão que envia o formulário -->
        <button type="submit">Inserir</button>

    </form>

    <!-- Linha separadora visual -->
    <hr>

    <!--
        Loop que percorre todos os livros enviados pelo controller.

        $livros vem do LivroController@index:
        return view('...', ['livros' => $livros]);
    -->
    @foreach ($livros as $livro)

        <p>

            <!-- Exibe o título em negrito -->
            <strong>{{ $livro->titulo }}</strong>

            <!-- Exibe autor, ano e gênero -->
            — {{ $livro->autor }} 
            ({{ $livro->ano_publicacao }}) — {{ $livro->genero }}

            <!--
                Formulário de exclusão do livro.

                Cada livro tem seu próprio formulário
                com o ID correspondente.
            -->
            <form action="/livros/{{ $livro->id }}" method="POST" style="display:inline;">

                <!-- Proteção CSRF obrigatória -->
                @csrf

                <!-- Informa ao Laravel que o método HTTP é DELETE -->
                @method('DELETE')

                <!-- Botão para excluir o livro -->
                <button type="submit">Excluir</button>

            </form>

        </p>

    @endforeach

</body>
</html>