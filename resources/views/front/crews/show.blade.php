<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Peñas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-screen-lg px-4 py-10">
        <h2 class="text-3xl font-semibold text-center text-gray-700 mb-6">Lista de Peñas</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($crews as $crew)
                <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $crew->name }}</h3>
                    <div class="w-16 h-16 rounded-full mb-4" style="background-color: {{ $crew->color }};"></div>
                    <p class="text-gray-600 text-sm italic">"{{ $crew->slogan }}"</p>
                    <p class="text-gray-500 text-sm">Capacidad: {{ $crew->capacity }}</p>
                    <p class="text-gray-500 text-sm">Fundación: {{ $crew->foundation }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
