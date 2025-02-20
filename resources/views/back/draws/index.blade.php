@include('back.partials.head-back')
<body class="bg-gray-100">
@include('back.partials.header-back')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Sorteo del año {{ $year }}</h1>

    <!-- Mostrar grilla con Blade usando clases Tailwind CSS -->
    @if(isset($locations) && $locations->count() > 0)
        <div class="grid grid-cols-{{ $maxWidth }} gap-2">
            @for ($row = 0; $row < $maxHeight; $row++)
                @for ($col = 0; $col < $maxWidth; $col++)
                    @if($row == 0 || $row == $maxHeight - 1 || $col == 0 || $col == $maxWidth - 1)
                        <div class="cell border border-gray-400 flex items-center justify-center h-16 w-16">
                            @php
                            $cell = $locations->first(function($location) use ($col, $row) {
                                return $location->x_coordinate === $col && $location->y_coordinate === $row;
                            });
                            @endphp
                            @if($cell)
                                <p class="text-sm">{{ $cell->crew->name }}</p>
                            @endif
                        </div>
                    @else
                        <div class="cell border border-gray-400 flex items-center justify-center h-16 w-16 bg-gray-200"></div>
                    @endif
                @endfor
            @endfor
        </div>
    @else
        <p class="text-red-500">No hay ubicaciones disponibles para mostrar.</p>
    @endif

    <!-- Formulario para regenerar el sorteo -->
    <form action="{{ route('draw.regenerate') }}" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="year" value="{{ $year }}">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Regenerar sorteo</button>
    </form>

    <!-- Opción de componente React -->
    <div id="draw-grid-root" class="mt-5"></div>
</div>
</body>


