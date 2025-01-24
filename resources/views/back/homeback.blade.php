<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - Panell d'Administració</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-blue-700 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Back Office - Panell d'Administració</h1>
            <nav>
                <a href="#usuaris" class="mr-4 hover:underline">Gestó d'Usuaris</a>
                <a href="#penyes" class="mr-4 hover:underline">Gestó de Penyes</a>
                <a href="#sorteigs" class="mr-4 hover:underline">Sorteigs</a>
                <a href="#pagaments" class="hover:underline">Pagaments</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Gestó d'Usuaris -->
        <section id="usuaris" class="mb-12">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Gestó d'Usuaris</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Afegeix Usuari
                </button>
                <table class="min-w-full bg-white border rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Nom</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border">1</td>
                            <td class="py-2 px-4 border">Admin</td>
                            <td class="py-2 px-4 border">admin@example.com</td>
                            <td class="py-2 px-4 border">
                                <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edita</button>
                                <button class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700">Elimina</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Gestó de Penyes -->
        <section id="penyes" class="mb-12">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Gestó de Penyes</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Afegeix Penya
                </button>
                <table class="min-w-full bg-white border rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Nom</th>
                            <th class="py-2 px-4 border">Descripció</th>
                            <th class="py-2 px-4 border">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border">1</td>
                            <td class="py-2 px-4 border">Penya 1</td>
                            <td class="py-2 px-4 border">Descripció de la Penya</td>
                            <td class="py-2 px-4 border">
                                <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edita</button>
                                <button class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700">Elimina</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Gestó de Sorteigs -->
        <section id="sorteigs" class="mb-12">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Gestó de Sorteigs</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600">Funcionalitat per gestionar sorteigs pròximament.</p>
            </div>
        </section>

        <!-- Gestó de Pagaments -->
        <section id="pagaments">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Gestó de Pagaments</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600">Funcionalitat per gestionar pagaments pròximament.</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Back Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
