<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Crew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Crew</h2>
        <form action="{{ route('crews.update', $crew->id) }}" method="POST" class="bg-white p-4 shadow-sm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" value="{{ $crew->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Color:</label>
                <input type="color" name="color" class="form-control" value="{{ $crew->color }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Slogan:</label>
                <input type="text" name="slogan" class="form-control" value="{{ $crew->slogan }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Capacidad:</label>
                <input type="number" name="capacity" class="form-control" value="{{ $crew->capacity }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fundación:</label>
                <input type="date" name="foundation" class="form-control" value="{{ $crew->foundation }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('crews.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
