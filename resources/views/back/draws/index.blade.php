@include('back.partials.head-back')
<body class="bg-gray-100">
@include('back.partials.header-back')

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Sorteo del año {{ $year }}</h1>

    <!-- Mostrar grilla con Blade usando clases Tailwind CSS -->
    @if(isset($locations) && $locations->count() > 0)
        <div class="overflow-x-auto">
            <div class="grid" style="grid-template-columns: repeat({{ $maxWidth }}, minmax(50px, 1fr)); gap: 2px;">
                @for ($row = 0; $row < $maxHeight; $row++)
                    @for ($col = 0; $col < $maxWidth; $col++)
                        @php
                        $cell = $locations->first(function($location) use ($col, $row) {
                            return $location->x_coordinate === $col && $location->y_coordinate === $row;
                        });
                        @endphp
                        <div class="border flex items-center justify-center h-16 w-16 @if($row == 0 || $row == $maxHeight - 1 || $col == 0 || $col == $maxWidth - 1) bg-gray-300 font-semibold @else bg-white @endif">
                            @if($cell)
                                <p class="text-sm text-gray-700 font-medium">{{ $cell->crew->name }}</p>
                            @endif
                        </div>
                    @endfor
                @endfor
            </div>
        </div>
    @else
        <p class="text-red-500 text-center text-lg">No hay ubicaciones disponibles para mostrar.</p>
    @endif

    <!-- Formulario para regenerar el sorteo -->
    <div class="text-center mt-6">
        <form action="{{ route('draw.regenerate') }}" method="POST">
            @csrf
            <input type="hidden" name="year" value="{{ $year }}">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded shadow-lg">Regenerar sorteo</button>
        </form>
    </div>

    <!-- Opción de componente React -->
    <div id="draw-grid-root" class="mt-8"></div>
</div>
</body>
