<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Curso</title>
</head>
<body>

    <h1>Cadastro de Curso</h1>

    <form action="/cursos/store" method="POST">

        @csrf

        <label>Nome do Curso:</label>
        <input type="text" name="nome">

        <button type="submit">
            Cadastrar
        </button>

    </form>

</body>
</html>