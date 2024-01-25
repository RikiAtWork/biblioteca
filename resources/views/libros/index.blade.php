<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h1>Listado de Libros</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col" class="col-auto">Titulo</th>
                <th scope="col" class="col">Editorial</th>
                <th scope="col" class="col">Precio</th>
                <th scope="col" colspan="2">
                    <form action="{{route('libros_create')}}">
                        <button type="submit" class="btn btn-outline-info btn-block" style="width: 200px;">Insertar</button>
                    </form>
                </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($libros as $libro)
                    <tr>
                        <td class="col">{{$libro["titulo"]}}</td>
                        <td class="col">{{$libro["editorial"]}}</td>
                        <td class="col">{{$libro["precio"]}}</td>
                        <td class="col">
                            <form action="{{ route('libros.destroy', $libro) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                        <td class="col">
                        <form action="{{ route('libros.edit', $libro) }}" method="PUT">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-outline-warning">Actualizar</button>
                            </form>
                        </td>
                        
                    </tr>
                @empty
                    <tr><td colspan="4">No hay registro</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>