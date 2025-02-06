<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - Panell d'Administració</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1; /* Se asegura de ocupar el espacio disponible */
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
            <h1 class="text-2xl font-bold">Back Office - Panell d'Administració</h1>
            <nav class="flex space-x-4 items-center">
                <a href="/usuaris" class="hover:underline">Gestió d'Usuaris</a>
                <a href="/crews" class="hover:underline">Gestió de Crews</a>
                <a href="/login" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition ml-4">Log Out</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto max-w-screen-lg px-4">
        <section class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Benvingut al Panell d'Administració</h2>
            <p class="text-gray-600 text-lg">Aquí podràs gestionar els usuaris i les penyes de manera fàcil i eficient.</p>
        </section>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Usuaris Card -->
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center">
                <h3 class="text-lg font-bold text-gray-700 mb-2">Gestió d'Usuaris</h3>
                <p class="text-gray-600 mb-4">Accedeix a la gestió d'usuaris per veure, afegir, editar o eliminar usuaris.</p>
                <a href="/usuaris" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Accedir</a>
            </div>

            <!-- Crews Card -->
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center">
                <h3 class="text-lg font-bold text-gray-700 mb-2">Gestió de Crews</h3>
                <p class="text-gray-600 mb-4">Gestiona les penyes, afegeix-ne de noves o edita les existents.</p>
                <a href="/crews" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Accedir</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto max-w-screen-lg text-center">
            <p class="text-sm">&copy; 2025 Back Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
