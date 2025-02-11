<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Usuario</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white p-4 shadow-sm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido:</label>
                <input type="text" name="surname" class="form-control" value="{{ $user->surname }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento:</label>
                <input type="date" name="birthday" class="form-control" value="{{ $user->birthday }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña (Dejar vacío si no quieres cambiarla):</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
