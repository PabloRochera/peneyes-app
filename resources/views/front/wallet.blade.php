<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monedero - Penyes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @viteReactRefresh
    @vite('resources/js/index.jsx')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <!-- Header / Navbar -->
    <header class="bg-blue-700 text-white fixed top-0 w-full z-10 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold hover:text-blue-300">Penyes App</a>
            <div class="flex items-center space-x-4">
                <a href="/profile" class="hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path fill="currentColor" d="M25.1 42c-9.4 0-17-7.6-17-17s7.6-17 17-17s17 7.6 17 17s-7.7 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.8-15-15-15"/><path fill="currentColor" d="m15.3 37.3l-1.8-.8c.5-1.2 2.1-1.9 3.8-2.7s3.8-1.7 3.8-2.8v-1.5c-.6-.5-1.6-1.6-1.8-3.2c-.5-.5-1.3-1.4-1.3-2.6c0-.7.3-1.3.5-1.7c-.2-.8-.4-2.3-.4-3.5c0-3.9 2.7-6.5 7-6.5c1.2 0 2.7.3 3.5 1.2c1.9.4 3.5 2.6 3.5 5.3c0 1.7-.3 3.1-.5 3.8c.2.3.4.8.4 1.4c0 1.3-.7 2.2-1.3 2.6c-.2 1.6-1.1 2.6-1.7 3.1V31c0 .9 1.8 1.6 3.4 2.2c1.9.7 3.9 1.5 4.6 3.1l-1.9.7c-.3-.8-1.9-1.4-3.4-1.9c-2.2-.8-4.7-1.7-4.7-4v-2.6l.5-.3s1.2-.8 1.2-2.4v-.7l.6-.3c.1 0 .6-.3.6-1.1c0-.2-.2-.5-.3-.6l-.4-.4l.2-.5s.5-1.6.5-3.6c0-1.9-1.1-3.3-2-3.3h-.6l-.3-.5c0-.4-.7-.8-1.9-.8c-3.1 0-5 1.7-5 4.5c0 1.3.5 3.5.5 3.5l.1.5l-.4.5c-.1 0-.3.3-.3.7c0 .5.6 1.1.9 1.3l.4.3v.5c0 1.5 1.3 2.3 1.3 2.4l.5.3v2.6c0 2.4-2.6 3.6-5 4.6c-1.1.4-2.6 1.1-2.8 1.6"/></svg>
                </a>
                <a href="{{ route('wallet') }}" class="hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 38 32"><g fill="#000"><path d="M32.509 7.5a.5.5 0 0 0 .5-.5V5.335a1.64 1.64 0 0 0-1.638-1.638h-2.687l-.613-1.809a.5.5 0 0 0-.619-.318L12.899 5.994a.501.501 0 0 0 .292.957L27.28 2.667l1.343 3.965a.499.499 0 1 0 .947-.321l-.547-1.615h2.349c.352 0 .638.286.638.638V7c-.001.276.223.5.499.5"/><path d="M36.5 15a.5.5 0 0 0 0 1c.351 0 .5.149.5.5v6c0 .351-.149.5-.5.5h-8c-.351 0-.5-.149-.5-.5v-5c0-.351.149-.5.5-.5h6a.5.5 0 0 0 .5-.5v-6c0-.911-.589-1.5-1.5-1.5H3c-1.233 0-2-.767-2-2s.767-2 2-2h5.076l-3.026.998a.5.5 0 1 0 .313.949L23.482.974a.5.5 0 1 0-.314-.95l-12.1 3.99C11.045 4.01 11.024 4 11 4H3C1.206 4 0 5.206 0 7v22c0 1.794 1.206 3 3 3h30.5c.911 0 1.5-.589 1.5-1.5v-5a.5.5 0 0 0-1 0v5c0 .351-.149.5-.5.5H3c-1.233 0-2-.767-2-2V9.312c.513.433 1.192.688 2 .688h30.5c.351 0 .5.149.5.5V16h-5.5c-.911 0-1.5.589-1.5 1.5v5c0 .911.589 1.5 1.5 1.5h8c.911 0 1.5-.589 1.5-1.5v-6c0-.911-.589-1.5-1.5-1.5"/><circle cx="32" cy="20" r="1"/></g></svg>
                </a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path fill-rule="evenodd" d="M11 20a1 1 0 0 0-1-1H5V5h5a1 1 0 1 0 0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h5a1 1 0 0 0 1-1" clip-rule="evenodd"/>
                            <path d="M21.714 12.7a1 1 0 0 0 .286-.697v-.006a1 1 0 0 0-.293-.704l-4-4a1 1 0 1 0-1.414 1.414L18.586 11H9a1 1 0 1 0 0 2h9.586l-2.293 2.293a1 1 0 0 0 1.414 1.414l4-4z"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto mt-20 px-4">
        <div class="max-w-xl mx-auto bg-white shadow-md rounded p-6">
            <h2 class="text-3xl font-bold mb-4 text-center">Monedero</h2>
            <div class="text-center mb-6">
                <span class="text-gray-500">Saldo actual:</span>
                <span class="font-semibold text-2xl text-green-600">{{ $balance }} €</span>
            </div>

            @if($errors->any())
                <div class="mb-4 p-2 bg-red-100 text-red-600 rounded">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('wallet.update') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Cantidad (€)</label>
                    <input type="number" step="0.01" name="amount" class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:border-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Acción</label>
                    <select name="action" class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:border-blue-500">
                        <option value="add">Añadir Saldo</option>
                        <option value="withdraw">Retirar Saldo</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors">
                    Actualizar Saldo
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4">
        <p>&copy; 2023 Penyes App. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
