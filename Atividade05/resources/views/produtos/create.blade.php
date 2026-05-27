<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>

    <h1>Cadastro de Produto</h1>

    <form action="/produtos" method="POST">

        @csrf

        <label>Nome do Produto:</label>
        <input type="text" name="nome">

        <button type="submit">
            Cadastrar
        </button>

    </form>

</body>
</html>