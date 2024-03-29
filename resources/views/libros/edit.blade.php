<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    
    <div class="container">
        <h1>Actualizar Libro</h1>
        <form action="{{ route('libros.update', $libro['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="titulo">Nuevo Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $libro['titulo'] }}" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="editorial">Nueva Editorial:</label>
                    <input type="text" class="form-control" name="editorial" id="editorial" value="{{ $libro['editorial'] }}" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="precio">Nuevo Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio" value="{{ $libro['precio'] }}" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="autor" class="form-label">Autor:</label>
                    <select class="form-select" name="autor" id="autor" aria-label="Selecciona un autor/a">
                        <option selected value="{{ $libro->id_autor }}">{{ $nombreAutor}}</option>

                        @forelse ($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->nombre}}</option>
                        @empty
                            <option value="">No tiene autor</option>
                        @endforelse
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-dark">Actualizar</button>
                    <a class="btn btn-primary" href="{{ route('libros.index') }}" role="button">Volver</a>
                </div>
            </div>
        </form>
    </div>


</body>
</html>