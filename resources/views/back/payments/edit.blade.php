.php
@include('back.partials.head-back')
@include('back.partials.header-back')

<div class="container mx-auto p-6">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Editar Pago</h2>
        
        <form action="{{ route('pagos.update', $pago->id) }}" method="POST" class="mb-6">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre del Pagador</label>
                    <input type="text" name="nombre" value="{{ $pago->nombre }}" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Monto</label>
                    <input type="number" name="monto" value="{{ $pago->monto }}" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Método de Pago</label>
                    <select name="metodo" class="mt-1 p-2 w-full border rounded-lg">
                        <option value="Tarjeta" {{ $pago->metodo == 'Tarjeta' ? 'selected' : '' }}>Tarjeta</option>
                        <option value="Transferencia" {{ $pago->metodo == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
                        <option value="Efectivo" {{ $pago->metodo == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Fecha de Pago</label>
                    <input type="date" name="fecha" value="{{ $pago->fecha }}" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Actualizar Pago</button>
        </form>
    </div>
</div>