<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Office - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Bienvenido</h1>
            <nav>
                <a href="#penyes" class="mr-4 hover:underline">Llista de Penyes</a>
                <a href="{{ route('profile.edit') }}" class="hover:underline">Perfil d'Usuari</a>
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

    <!-- Sección de Sorteo -->
    <section id="sorteig" class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-semibold mb-4">Sorteig</h2>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <p class="mb-4">Prem sobre el botó per realitzar el sorteig.</p>
         
        </div>
        <!-- Resultados del Sorteo -->
        @if(count($draws))
            <h3 class="text-lg font-semibold mt-6">Resultats del Sorteig</h3>
            <ul class="bg-white p-4 rounded-lg shadow-md mt-4">
                @foreach($draws as $draw)
                    <li class="border-b last:border-b-0 py-2 px-4">
                        <p><strong>Peña:</strong> {{ $draw->crew->name }}</p>
                        <p><strong>Localització:</strong> {{ $draw->location_id }}</p>
                        <p><strong>Data:</strong> {{ $draw->created_at }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Front Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
