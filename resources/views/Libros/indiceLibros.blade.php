<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Catalogo de Libros</h1>
        @csrf
        <input type="button" value="AÑADIR LIBRO" action="/create">
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Fecha de Publicación</th>
            <th>Páginas</th>
            <th>Descripción</th>
            <th>Tema</th>
        </tr>

        @foreach($libros as $libro)
        <tr>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->editorial}}</td>
            <td>{{$libro->publicacion}}</td>
            <td>{{$libro->paginas}}</td>
            <td>{{$libro->descripcion}}</td>
            <td>{{$libro->tema}}</td>
            <td>
                    <a href="libros/{{$libro ->id}}">Ver detalle</a>
                    <a href="libros/{{$libro ->id}}/edit">Editar</a>
                    <form action="/libros/{{$libro ->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="button" value="Eliminar">    
                    </form>


                </td>
        </tr>
        @endforeach
    </table>
</body>
</html>