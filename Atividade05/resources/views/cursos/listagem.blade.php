<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Cursos</title>
</head>
<body>

    <h1>Lista de Cursos</h1>

    <ul>
        @foreach($cursos as $curso)
            <li>{{ $curso }}</li>
        @endforeach
    </ul>

</body>
</html>