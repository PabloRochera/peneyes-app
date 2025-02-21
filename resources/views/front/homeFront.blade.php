<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Penyes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @viteReactRefresh
    @vite('resources/js/index.jsx')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col justify-between pt-16">
<!-- Navbar -->
<nav class="bg-blue-700 text-white fixed w-full z-10 top-0 shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold hover:text-blue-300">Penyes App</a>
        <div class="flex items-center space-x-4">
            <a href="/profile" class="hover:text-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path fill="currentColor" d="M25.1 42c-9.4 0-17-7.6-17-17s7.6-17 17-17s17 7.6 17 17s-7.7 17-17 17m0-32c-8.3 0-15 6.7-15 15s6.7 15 15 15s15-6.7 15-15s-6.8-15-15-15"/><path fill="currentColor" d="m15.3 37.3l-1.8-.8c.5-1.2 2.1-1.9 3.8-2.7s3.8-1.7 3.8-2.8v-1.5c-.6-.5-1.6-1.6-1.8-3.2c-.5-.5-1.3-1.4-1.3-2.6c0-.7.3-1.3.5-1.7c-.2-.8-.4-2.3-.4-3.5c0-3.9 2.7-6.5 7-6.5c1.2 0 2.7.3 3.5 1.2c1.9.4 3.5 2.6 3.5 5.3c0 1.7-.3 3.1-.5 3.8c.2.3.4.8.4 1.4c0 1.3-.7 2.2-1.3 2.6c-.2 1.6-1.1 2.6-1.7 3.1V31c0 .9 1.8 1.6 3.4 2.2c1.9.7 3.9 1.5 4.6 3.1l-1.9.7c-.3-.8-1.9-1.4-3.4-1.9c-2.2-.8-4.7-1.7-4.7-4v-2.6l.5-.3s1.2-.8 1.2-2.4v-.7l.6-.3c.1 0 .6-.3.6-1.1c0-.2-.2-.5-.3-.6l-.4-.4l.2-.5s.5-1.6.5-3.6c0-1.9-1.1-3.3-2-3.3h-.6l-.3-.5c0-.4-.7-.8-1.9-.8c-3.1 0-5 1.7-5 4.5c0 1.3.5 3.5.5 3.5l.1.5l-.4.5c-.1 0-.3.3-.3.7c0 .5.6 1.1.9 1.3l.4.3v.5c0 1.5 1.3 2.3 1.3 2.4l.5.3v2.6c0 2.4-2.6 3.6-5 4.6c-1.1.4-2.6 1.1-2.8 1.6"/></svg>
            </a>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <g fill="currentColor">
                        <path fill-rule="evenodd" d="M11 20a1 1 0 0 0-1-1H5V5h5a1 1 0 1 0 0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h5a1 1 0 0 0 1-1" clip-rule="evenodd"/>
                        <path d="M21.714 12.7a1 1 0 0 0 .286-.697v-.006a1 1 0 0 0-.293-.704l-4-4a1 1 0 1 0-1.414 1.414L18.586 11H9a1 1 0 1 0 0 2h9.586l-2.293 2.293a1 1 0 0 0 1.414 1.414l4-4z"/>
                    </g>
                </svg>
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
<header class="relative bg-blue-900 text-white">
    <div class="relative w-full h-[600px] overflow-hidden" style="background-image: url('{{ asset('/pagehome.png') }}');">
        
        <!-- Fondo semitransparente para contraste -->
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-gray-800 to-transparent opacity-70"></div>

        <!-- Contenido del encabezado -->
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6">
            <h1 class="text-5xl font-extrabold text-white mb-4 drop-shadow-lg">Viu l'Esperit de les Penyes!</h1>
        </div>
    </div>
</header>

<!-- Llista de Penyes -->
<section id="llista-penyes" class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Llista de Penyes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($crews as $crew)
            <div class="relative bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <h3 class="text-xl font-semibold mb-2">{{ $crew->name }}</h3>
                <p class="text-gray-700">{{ $crew->slogan }}</p>
                <p class="text-gray-500 text-sm mt-2">Capacidad: {{ $crew->capacity }}</p>
                <p class="text-gray-500 text-sm">Fundación: {{ $crew->foundation }}</p>
                <div class="absolute inset-0 bg-blue-700 bg-opacity-75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <!-- Cambiado de <a> a formulario -->
                    <form method="POST" action="{{ route('front.crews.requestMembership', $crew) }}">
                        @csrf
                        <button type="submit" class="bg-white text-blue-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">
                            Solicitar Membresia
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section>
    <div id="app"></div>
</section>
</body>
</html>
