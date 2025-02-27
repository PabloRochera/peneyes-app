@include('back.partials.head-back')
@include('back.partials.header-back')


<div class="container mx-auto p-6">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Gestión de Pagos</h2>
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
                        <td class="px-4 py-2 flex space-x-2">
                            <a href="{{ route('pagos.edit', $pago->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
