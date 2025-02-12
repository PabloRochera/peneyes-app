@include('back.partials.head-back')
@include('back.partials.header-back')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Gestión de Pagos</h2>
        
        <!-- Formulario de Pago -->
        <form action="{{ route('pagos.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre del Pagador</label>
                    <input type="text" name="nombre" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Monto</label>
                    <input type="number" name="monto" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Método de Pago</label>
                    <select name="metodo" class="mt-1 p-2 w-full border rounded-lg">
                        <option value="Tarjeta">Tarjeta</option>
                        <option value="Transferencia">Transferencia</option>
                        <option value="Efectivo">Efectivo</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Fecha de Pago</label>
                    <input type="date" name="fecha" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Registrar Pago</button>
        </form>

        <!-- Tabla de Pagos -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Monto</th>
                        <th class="px-4 py-2 text-left">Método</th>
                        <th class="px-4 py-2 text-left">Fecha</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pagos as $pago)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $pago->nombre }}</td>
                        <td class="px-4 py-2">${{ number_format($pago->monto, 2) }}</td>
                        <td class="px-4 py-2">{{ $pago->metodo }}</td>
                        <td class="px-4 py-2">{{ $pago->fecha }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('pagos.edit', $pago->id) }}" class="text-blue-500">Editar</a>
                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
