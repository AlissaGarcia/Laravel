<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno</title>
</head>
<body>

    <h1>Cadastro de Aluno</h1>

    <form action="/alunos" method="POST">

        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <button type="submit">
            Salvar
        </button>

    </form>

</body>
</html>