<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Disciplina</title>
</head>
<body>

    <h1>Cadastro de Disciplina</h1>

    <form action="/disciplinas/store" method="POST">

        @csrf

        <label>Nome da Disciplina:</label>
        <input type="text" name="nome">

        <button type="submit">
            Cadastrar
        </button>

    </form>

</body>
</html>