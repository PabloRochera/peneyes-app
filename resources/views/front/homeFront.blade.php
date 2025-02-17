<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-700 text-white py-4 shadow-md">
        <div class="container mx-auto max-w-screen-lg px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Peñes la Vall</h1>
            <nav class="flex space-x-4 items-center">
                <a href="/logout" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition ml-4">Cerrar Sesión</a>
            </nav>
        </div>
    </header>


    <!-- Sección de Lista de Penyes -->
    <section id="penyes" class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-semibold mb-4">Llista de Penyes</h2>
        <ul class="bg-white p-4 rounded-lg shadow-md">
            @foreach($crews as $crew)
                <li class="border-b last:border-b-0 py-2 px-4">
                    <p><strong>Nom:</strong> {{ $crew->name }}</p>
                    <p><strong>Color:</strong> {{ $crew->color }}</p>
                    <p><strong>Slogan:</strong> {{ $crew->slogan }}</p>
                    <p><strong>Capacitat:</strong> {{ $crew->capacity }}</p>
                    <p><strong>Fundació:</strong> {{ $crew->foundation }}</p>
                </li>
            @endforeach
        </ul>
    </section>

    

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Front Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
