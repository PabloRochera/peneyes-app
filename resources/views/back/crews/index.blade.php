@include('back.partials.head-back')
<body class="bg-light">
@include('back.partials.header-back')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Lista de Crews</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover bg-white shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Slogan</th>
                    <th>Capacidad</th>
                    <th>Fundación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($crews as $crew)
                    <tr>
                        <td>{{ $crew->id }}</td>
                        <td>{{ $crew->name }}</td>
                        <td style="background-color: {{ $crew->color }}; color: white;">{{ $crew->color }}</td>
                        <td>{{ $crew->slogan }}</td>
                        <td>{{ $crew->capacity }}</td>
                        <td>{{ $crew->foundation }}</td>
                        <td>
                            <a href="{{ route('crews.edit', $crew->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('crews.destroy', $crew->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este crew?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('crews.create') }}" class="btn btn-primary">Añadir Nuevo Crew</a>
    </div>
</body>
</html>
