@include('back.partials.head-back')

@include('back.partials.header-back')

<div class="container mx-auto px-6 py-8">
    <h1 class="text-4xl font-bold text-center mb-8">Sorteo del año {{ $year }}</h1>

    <!-- Mostrar grilla con Blade -->
    @if(isset($locations) && $locations->count() > 0)
        <div class="flex justify-center">
            <div 
                class="grid gap-1 border-8 border-gray-400 p-4 rounded-lg bg-white shadow-2xl"
                style="grid-template-columns: repeat({{ $maxWidth }}, minmax(50px, 1fr));"
            >
                @for ($row = 0; $row < $maxHeight; $row++)
                    @for ($col = 0; $col < $maxWidth; $col++)
                        @php
                        // Detectar si es un borde (exterior de la cuadrícula)
                        $isBorder = $row === 0 || $row === $maxHeight - 1 || $col === 0 || $col === $maxWidth - 1;
                        $cell = $isBorder ? $locations->first(function($location) use ($col, $row) {
                            return $location->x_coordinate === $col && $location->y_coordinate === $row;
                        }) : null;
                        @endphp
                        
                        <div class="w-20 h-20 flex items-center justify-center
                            {{ $isBorder ? 'bg-gray-300 border-2 border-gray-400' : 'bg-transparent' }}">
                            @if($cell)
                                <p class="text-sm font-semibold text-black">{{ $cell->crew->name }}</p>
                            @endif
                        </div>
                    @endfor
                @endfor
            </div>
        </div>
    @else
        <p class="text-center text-gray-700 mt-4">No hay ubicaciones disponibles para mostrar.</p>
    @endif

    <!-- Formulario para regenerar el sorteo -->
    <div class="mt-8 flex justify-center">
        <form action="{{ route('draw.regenerate') }}" method="POST" class="bg-white p-6 shadow-lg rounded-lg">
            @csrf
            <input type="hidden" name="year" value="{{ $year }}">
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-blue-700 transition">
                Regenerar sorteo
            </button>
        </form>
    </div>

    <!-- Opción de componente React -->
    <div id="draw-grid-root" class="mt-12"></div>
</div>
</body>
