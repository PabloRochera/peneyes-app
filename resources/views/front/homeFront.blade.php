<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Office - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Front Office</h1>
            <nav>
                <a href="#penyes" class="mr-4 hover:underline">Llista de Penyes</a>
                <a href="#perfil" class="hover:underline">Perfil d'Usuari</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Llista de Penyes -->
        <section id="penyes" class="mb-12">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Llista de Penyes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Exemple de Penya -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-bold text-blue-600">Penya 1</h3>
                    <p class="text-gray-600 mb-4">Descripció de la penya i informació rellevant.</p>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Sol·licita Unir-te
                    </button>
                </div>
                <!-- Afegeix més penyes aquí -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-lg font-bold text-blue-600">Penya 2</h3>
                    <p class="text-gray-600 mb-4">Descripció de la penya i informació rellevant.</p>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Sol·licita Unir-te
                    </button>
                </div>
            </div>
        </section>

        <!-- Perfil d'Usuari -->
        <section id="perfil">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Perfil d'Usuari</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <!-- Dades del Usuari -->
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-blue-600">Dades Personals</h3>
                    <p class="text-gray-600">Nom: Joan User</p>
                    <p class="text-gray-600">Email: joanuser@example.com</p>
                </div>

                <!-- Sol·licituds de Membresia -->
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-blue-600">Sol·licituds de Membresia</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Penya 1 - <span class="text-yellow-500">Pendent</span></li>
                        <li>Penya 2 - <span class="text-green-500">Acceptada</span></li>
                    </ul>
                </div>

                <!-- Estat dels Pagaments -->
                <div>
                    <h3 class="text-lg font-bold text-blue-600">Estat dels Pagaments</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Subscripció anual: <span class="text-green-500">Pagada</span></li>
                        <li>Pagament addicional: <span class="text-red-500">No Pagat</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Front Office. Tots els drets reservats.</p>
        </div>
    </footer>
</body>
</html>
