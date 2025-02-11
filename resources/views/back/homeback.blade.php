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
            <h1 class="text-2xl font-bold">Panel de Administración</h1>
            <nav class="flex space-x-4 items-center">
                <a href="{{ route('users.index') }}" class="hover:underline">Gestión de Usuarios</a>
                <a href="{{ route('crews.index') }}" class="hover:underline">Gestión de Peñas</a>
                <a href="/logout" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition ml-4">Cerrar Sesión</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto max-w-screen-lg px-4">
        <section class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Bienvenido al Panel de Administración</h2>
            <p class="text-gray-600 text-lg">Aquí puedes gestionar usuarios y peñas de forma sencilla y eficiente.</p>
        </section>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Usuarios Card -->
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center">
                <h3 class="text-lg font-bold text-gray-700 mb-2">Gestión de Usuarios</h3>
                <p class="text-gray-600 mb-4">Administra los usuarios, agrega nuevos o edita los existentes.</p>
                <a href="{{ route('users.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
            </div>

            <!-- Peñas Card -->
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center text-center">
                <h3 class="text-lg font-bold text-gray-700 mb-2">Gestión de Peñas</h3>
                <p class="text-gray-600 mb-4">Gestiona las peñas, agrega nuevas o edita las existentes.</p>
                <a href="{{ route('crews.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto max-w-screen-lg text-center">
            <p class="text-sm">&copy; 2025 Panel de Administración. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
