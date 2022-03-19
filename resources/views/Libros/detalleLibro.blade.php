<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Libro</title>
</head>
<body>
    <h1>Detalles libro</h1>

    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Fecha de Publicacion</th>
            <th>Páginas</th>
            <th>Descripción</th>
            <th>Tema</th>
        </tr>
            <tr>
                <td>{{$libro -> titulo}}</td>
                <td>{{$libro -> autor}}</td>
                <td>{{$libro -> editorial}}</td>
                <td>{{$libro -> Publicacion}}</td>
                <td>{{$libro -> paginas}}</td>
                <td>{{$libro -> descripcion}}</td>
                <td>{{$libro -> tema}}</td>
            </tr>
    </table>
</body>
</html>
