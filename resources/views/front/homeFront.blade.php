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
            
            <a href="{{ route('wallet') }}" class="hover:text-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 38 32"><g fill="#000"><path d="M32.509 7.5a.5.5 0 0 0 .5-.5V5.335a1.64 1.64 0 0 0-1.638-1.638h-2.687l-.613-1.809a.5.5 0 0 0-.619-.318L12.899 5.994a.501.501 0 0 0 .292.957L27.28 2.667l1.343 3.965a.499.499 0 1 0 .947-.321l-.547-1.615h2.349c.352 0 .638.286.638.638V7c-.001.276.223.5.499.5"/><path d="M36.5 15a.5.5 0 0 0 0 1c.351 0 .5.149.5.5v6c0 .351-.149.5-.5.5h-8c-.351 0-.5-.149-.5-.5v-5c0-.351.149-.5.5-.5h6a.5.5 0 0 0 .5-.5v-6c0-.911-.589-1.5-1.5-1.5H3c-1.233 0-2-.767-2-2s.767-2 2-2h5.076l-3.026.998a.5.5 0 1 0 .313.949L23.482.974a.5.5 0 1 0-.314-.95l-12.1 3.99C11.045 4.01 11.024 4 11 4H3C1.206 4 0 5.206 0 7v22c0 1.794 1.206 3 3 3h30.5c.911 0 1.5-.589 1.5-1.5v-5a.5.5 0 0 0-1 0v5c0 .351-.149.5-.5.5H3c-1.233 0-2-.767-2-2V9.312c.513.433 1.192.688 2 .688h30.5c.351 0 .5.149.5.5V16h-5.5c-.911 0-1.5.589-1.5 1.5v5c0 .911.589 1.5 1.5 1.5h8c.911 0 1.5-.589 1.5-1.5v-6c0-.911-.589-1.5-1.5-1.5"/><circle cx="32" cy="20" r="1"/></g></svg>
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

@if(!is_null($relatedCrew))

<section>
    <div id="App"></div>
</section>

<!-- Solicitar Pago -->
<section id="solicitar-pago" class="container mx-auto px-6 py-16">
<section id="solicitar-pago" class="container mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Solicitar Pago Anual</h2>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('pagos.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" value="{{ Auth::user()->name ?? '' }}" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Monto</label>
                <input type="number" step="0.01" name="monto" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Método de Pago</label>
                <select name="metodo" class="mt-1 p-2 w-full border rounded-lg">
                    <option value="Tarjeta">Tarjeta</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Efectivo">Efectivo</option>
                </select>
            </div>
        
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Fecha de Pago</label>
                <input type="date" name="fecha" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
                Solicitar Pago
            </button>
        </form>
    </div>
</section>


@else
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
                        @if(Auth::check() && $crew->users->contains(Auth::user()))
                            @php $membership = $crew->users->firstWhere('id', Auth::user()->id); @endphp
                            @if($membership->pivot->confirmed)
                                <span class="text-white font-bold">¡Has sido aceptado en la peña!</span>
                            @else
                                <form method="POST" action="{{ route('front.crews.requestMembership', $crew) }}">
                                    @csrf
                                    <button type="submit" class="bg-white text-blue-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">
                                        Solicitar Membresia
                                    </button>
                                </form>
                            @endif
                        @else
                            <form method="POST" action="{{ route('front.crews.requestMembership', $crew) }}">
                                @csrf
                                <button type="submit" class="bg-white text-blue-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">
                                    Solicitar Membresia
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
</body>
</html>
