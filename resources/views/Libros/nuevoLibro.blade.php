<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Libro</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror --}}
    

    @isset($libro)
    <form action="/libros{{$libro->id }}" method="post"> <!----actualizar-->
        @method ('PATCH')
    @else
    <form action="/libros" method="post">
    @endisset
    
        @csrf   <!--Proteccion contra ataque -->
        <label for="libro">Nombre del Libro</label><br>
        <input type="text" name="titulo" value="{{isset($libro) ? $libro->libro : ''}}">
        <br>
        <label for="autor">Autor</label><br>
        <input type="text" name="autor" value="{{isset($libro) ? $libro->libro : ''}}">
        <br>
        <label for="editorial">Editorial</label><br>
        <input type="text" name="editorial" value="{{isset($libro) ? $libro->libro : ''}}">
        <br>
        <label for="publicacion">Fecha de Publicación</label><br>
        <input type="date" name="publicacion" value="{{isset($libro) ? $libro->libro : ''}}">
        <br>
        <label for="paginas">Numero de Páginas</label><br>
        <input type="text" name="paginas" value="{{isset($libro) ? $libro->libro : ''}}">
        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="10">
            {{isset($libro) ? $libro->descripcion : '' }}
        </textarea>
        <br>
        <label for="tema">Tema</label><br>
        <select name="tema" id="tema">
            <option value="Ficcion"{{isset($libro) && $libro->categoria == 'Ficcion' ? 'selected' : '' }}>Ficcion</option>
            <option value="Arte"{{isset($libro) && $libro->categoria == 'Arte' ? 'selected' : ''}}>Arte</option>
            <option value="Novela"{{isset($libro) && $libro->categoria == 'Novela' ? 'selected' : ''}}>Novela</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
