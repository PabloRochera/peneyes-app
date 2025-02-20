@include('back.partials.head-back')
<body class="bg-gray-100">
@include('back.partials.header-back')
    <div class="container mx-auto mt-10 p-4">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Lista de Usuarios</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <input type="text" id="search" placeholder="Buscar..." class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">ID</th>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">Apellido</th>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">Email</th>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">Fecha de Nacimiento</th>
                        <th class="py-3 px-4 uppercase font-semibold text-sm">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700" id="userTable">
                    @foreach($users as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $user->id }}</td>
                            <td class="py-3 px-4">{{ $user->name }}</td>
                            <td class="py-3 px-4">{{ $user->surname }}</td>
                            <td class="py-3 px-4">{{ $user->email }}</td>
                            <td class="py-3 px-4">{{ $user->birthday }}</td>
                            <td class="py-3 px-4 flex space-x-4">
                                <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20">
                                        <path fill="currentColor" d="m2.292 13.36l4.523 4.756L.5 20zM12.705 2.412l4.522 4.755L7.266 17.64l-4.523-4.754zM16.142.348l2.976 3.129c.807.848.086 1.613.086 1.613l-1.521 1.6l-4.524-4.757L14.68.334l.02-.019c.119-.112.776-.668 1.443.033"/>
                                    </svg>
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48">
                                            <g fill="none" stroke-width="4">
                                                <path stroke="currentColor" stroke-linejoin="round" d="M15 12L16.2 5H31.8L33 12"/>
                                                <path stroke="currentColor" stroke-linecap="round" d="M6 12H42"/>
                                                <path fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M37 12L35 43H13L11 12H37Z" clip-rule="evenodd"/>
                                                <path stroke="#fff" stroke-linecap="round" d="M19 35H29"/>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('users.create') }}" class="mt-6 inline-flex items-center space-x-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48">
                <g fill="none" stroke-linejoin="round" stroke-width="4">
                    <path fill="#3f0" stroke="currentColor" d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z"/>
                    <path stroke="#fff" stroke-linecap="round" d="M24 16V32"/>
                    <path stroke="#fff" stroke-linecap="round" d="M16 24L32 24"/>
                </g>
            </svg>
            <span>Agregar Usuario</span>
        </a>

        <!-- Solicitudes de membresía -->
        <div class="content is-medium mt-5">
            <h2 class="title is-4">Solicitudes de Membresía</h2>
            @if($membershipRequests->isEmpty())
                <p>No hay solicitudes de membresía pendientes.</p>
            @else
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Peña</th>
                            <th>Año</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($membershipRequests as $request)
                            <tr>
                                <td>{{ $request->crew->name }}</td>
                                <td>{{ $request->year }}</td>
                                <td>{{ $request->user->name }} {{ $request->user->surname }}</td>
                                <td>
                                    <form method="POST" action="{{ route('back.memberships.confirm', ['crew' => $request->crew->id, 'user' => $request->user->id]) }}">
                                        @csrf
                                        <button type="submit" class="button is-primary">Confirmar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            var value = this.value.toLowerCase();
            var rows = document.querySelectorAll('#userTable tr');
            rows.forEach(function(row) {
                var show = row.textContent.toLowerCase().indexOf(value) > -1;
                row.style.display = show ? '' : 'none';
            });
        });
    </script>
</body>
</html>
