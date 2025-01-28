<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Office - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Bienvenido </h1>
            <nav>
                <a href="#penyes" class="mr-4 hover:underline">Llista de Penyes</a>
                <a href="{{ route('perfil') }}" class="hover:underline">Perfil d'Usuari</a>
            </nav>
        </div>
    </header>
    <body>
        <div>


        </div>
    </body>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Front Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
