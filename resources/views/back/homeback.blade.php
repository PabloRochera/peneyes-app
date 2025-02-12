@include('back.partials.head-back')
<body class="bg-gray-500 min-h-screen flex flex-col">
    @include('back.partials.header-back')

    <!-- Main Content -->
    <main class="container mx-auto max-w-screen-xl px-6 flex-grow bg-gray-300 shadow-lg rounded-lg p-8 mt-10"> <!-- Cambiado a max-w-screen-xl y p-8 -->
        <section class="text-center mb-8">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Bienvenido al Panel de Administración</h2>
            <p class="text-gray-700 text-lg leading-relaxed">Aquí puedes gestionar usuarios, peñas, sorteos y pagos de forma sencilla y eficiente.</p>
        </section>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"> <!-- Cambiado a gap-8 -->
            <!-- Usuarios Card -->
            <div class="bg-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transition-transform transform hover:scale-105"> <!-- Cambiado a p-8 -->
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Usuarios</h3>
                <p class="text-gray-600 mb-4">
                    <svg class="w-14 h-14 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M144 160a80 80 0 1 0 0-160a80 80 0 1 0 0 160m368 0a80 80 0 1 0 0-160a80 80 0 1 0 0 160M0 298.7C0 310.4 9.6 320 21.3 320h214c-26.6-23.5-43.3-57.8-43.3-96c0-7.6.7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7h-42.7C47.8 192 0 239.8 0 298.7M320 320c24 0 45.9-8.8 62.7-23.3c2.5-3.7 5.2-7.3 8-10.7c2.7-3.3 5.7-6.1 9-8.3C410 262.3 416 243.9 416 224c0-53-43-96-96-96s-96 43-96 96s43 96 96 96m65.4 60.2c-10.3-5.9-18.1-16.2-20.8-28.2H261.4C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7h300.6c-2.1-5.2-3.2-10.9-3.2-16.4v-3c-1.3-.7-2.7-1.5-4-2.3l-2.6 1.5c-16.8 9.7-40.5 8-54.7-9.7c-4.5-5.6-8.6-11.5-12.4-17.6l-.1-.2l-.1-.2l-2.4-4.1l-.1-.2l-.1-.2c-3.4-6.2-6.4-12.6-9-19.3c-8.2-21.2 2.2-42.6 19-52.3l2.7-1.5v-4.6l-2.7-1.5zM533.3 192h-42.7c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 17.4-3.5 33.9-9.7 49c2.5.9 4.9 2 7.1 3.3l2.6 1.5c1.3-.8 2.6-1.6 4-2.3v-3c0-19.4 13.3-39.1 35.8-42.6c7.9-1.2 16-1.9 24.2-1.9s16.3.6 24.2 1.9c22.5 3.5 35.8 23.2 35.8 42.6v3c1.3.7 2.7 1.5 4 2.3l2.6-1.5c16.8-9.7 40.5-8 54.7 9.7c2.3 2.8 4.5 5.8 6.6 8.7c-2.1-57.1-49-102.7-106.6-102.7zm91.3 163.9c6.3-3.6 9.5-11.1 6.8-18c-2.1-5.5-4.6-10.8-7.4-15.9l-2.3-4c-3.1-5.1-6.5-9.9-10.2-14.5c-4.6-5.7-12.7-6.7-19-3l-2.9 1.7c-9.2 5.3-20.4 4-29.6-1.3s-16.1-14.5-16.1-25.1v-3.4c0-7.3-4.9-13.8-12.1-14.9c-6.5-1-13.1-1.5-19.9-1.5s-13.4.5-19.9 1.5c-7.2 1.1-12.1 7.6-12.1 14.9v3.4c0 10.6-6.9 19.8-16.1 25.1s-20.4 6.6-29.6 1.3l-2.9-1.7c-6.3-3.6-14.4-2.6-19 3c-3.7 4.6-7.1 9.5-10.2 14.6l-2.3 3.9c-2.8 5.1-5.3 10.4-7.4 15.9c-2.6 6.8.5 14.3 6.8 17.9l2.9 1.7c9.2 5.3 13.7 15.8 13.7 26.4s-4.5 21.1-13.7 26.4l-3 1.7c-6.3 3.6-9.5 11.1-6.8 17.9c2.1 5.5 4.6 10.7 7.4 15.8l2.4 4.1c3 5.1 6.4 9.9 10.1 14.5c4.6 5.7 12.7 6.7 19 3l2.9-1.7c9.2-5.3 20.4-4 29.6 1.3s16.1 14.5 16.1 25.1v3.4c0 7.3 4.9 13.8 12.1 14.9c6.5 1 13.1 1.5 19.9 1.5s13.4-.5 19.9-1.5c7.2-1.1 12.1-7.6 12.1-14.9V492c0-10.6 6.9-19.8 16.1-25.1s20.4-6.6 29.6-1.3l2.9 1.7c6.3 3.6 14.4 2.6 19-3c3.7-4.6 7.1-9.4 10.1-14.5l2.4-4.2c2.8-5.1 5.3-10.3 7.4-15.8c2.6-6.8-.5-14.3-6.8-17.9l-3-1.7c-9.2-5.3-13.7-15.8-13.7-26.4s4.5-21.1 13.7-26.4l3-1.7zM472 384a40 40 0 1 1 80 0a40 40 0 1 1-80 0"/></svg>
                </p>
                <a href="{{ route('users.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
            </div>

            <!-- Peñas Card -->
            <div class="bg-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transition-transform transform hover:scale-105"> <!-- Cambiado a p-8 -->
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Peñas</h3>
                <p class="text-gray-600 mb-4">
                    <svg class="w-14 h-14 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M31.638 14.327c-9.315 3.726-10.815 12.314-6.998 15.586S31.138 35.593 35 42.5c1.545-.182 5.272-2.908 5.272-2.908c-.5-6.316-8.634-25.265-8.634-25.265" stroke-width="1"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M24.095 20.407c-5.733-6.739-3.04-10.795-6.108-13.385s-7.191-1.09-7.191-1.09c2.897 1.67 5.248 3.34 2.726 5.964s-4.123.477-5.793-1.193c-.024 5.385 3.067 6.135 6.509 7.498s8.388 8.077 8.388 8.077" stroke-width="1"/></svg>
                </p>
                <a href="{{ route('crews.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
            </div>

            <!-- Realizar Sorteo Card -->
            <div class="bg-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transition-transform transform hover:scale-105"> <!-- Cambiado a p-8 -->
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Realizar Sorteo</h3>
                <p class="text-gray-600 mb-4">
                    <svg class="w-14 h-14 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g fill="none"><circle cx="24" cy="24" r="9" stroke="currentColor" stroke-width="4"/><circle r="3" fill="currentColor" transform="matrix(-1 0 0 1 24 24)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M9 14s7.5-11.5 20.5-7S42 24.5 42 24.5M39 34s-6 11-19.5 7.5S6 24 6 24M42 8v16M6 24v16"/></g></svg>
                </p>
                <a href="{{ route('draw.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
            </div>

            <!-- Gestión de Pagos Card -->
            <div class="bg-white shadow-lg rounded-lg p-8 flex flex-col items-center text-center transition-transform transform hover:scale-105"> <!-- Cambiado a p-8 -->
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Pagos</h3>
                <p class="text-gray-600 mb-4">
                    <svg class="w-14 h-14 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M19.013 10.15a.55.55 0 0 0-.145.493Q19 11.303 19 12a7 7 0 0 1-12.167 4.722a.53.53 0 0 0-.76-.032a.475.475 0 0 0-.027.654a8 8 0 0 0 13.788-6.971c-.079-.383-.545-.498-.821-.222m-1.224-2.99a.475.475 0 0 0 .018-.664A8 8 0 0 0 4.192 13.75c.084.378.546.489.82.215c.13-.13.18-.32.142-.5A7 7 0 0 1 17.038 7.14a.53.53 0 0 0 .75.021"/><path fill="currentColor" fill-rule="evenodd" d="M18.125 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 1 1 0-1h1.5V5.5a.5.5 0 0 1 .5-.5M5.521 16.147A.5.5 0 0 1 5.875 16h2a.5.5 0 0 1 0 1h-1.5v1.5a.5.5 0 1 1-1 0v-2a.5.5 0 0 1 .146-.354" clip-rule="evenodd"/><path fill="currentColor" d="M12.224 12.334v1.941c.662-.074 1.138-.457 1.138-1.006c0-.558-.525-.766-1.116-.93zm-1.433-1.679c0 .555.57.785.985.902V9.741c-.602.08-.985.44-.985.914"/><path fill="currentColor" fill-rule="evenodd" d="M12 17a5 5 0 1 0 0-10a5 5 0 0 0 0 10m.224-1.5h-.448v-.61c-1.075-.07-1.731-.672-1.794-1.534h.7c.05.563.52.859 1.094.919v-2.07l-.219-.063c-.875-.251-1.422-.7-1.422-1.454c0-.86.703-1.455 1.64-1.55V8.5h.45v.629c.99.066 1.69.673 1.716 1.471h-.656c-.06-.498-.481-.81-1.06-.867v1.944l.218.06c.58.154 1.575.493 1.575 1.543c0 .853-.645 1.531-1.794 1.61z" clip-rule="evenodd"/></svg> <!-- Cambiado el ícono -->
                </p>
                <a href="{{ route('draw.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Acceder</a>
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
