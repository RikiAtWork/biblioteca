<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h1>Nuevo libro</h1>
        <form action="{{ route('libros.store') }}" method="POST" class="mb-3">
        @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="editorial" class="form-label">Editorial:</label>
                    <input type="text" class="form-control" name="editorial" id="editorial" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio" required>
                </div>

                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-dark btn-block">Enviar</button>

                    <a class="btn btn-primary" href="{{route('libros.index')}}" role="button">Volver</a>
                </div>
                
            </div>
        </form>
    </div>

</body>
</html>