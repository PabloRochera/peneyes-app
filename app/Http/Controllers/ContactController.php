<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCrewRequest;
use App\Http\Requests\UpdateCrewRequest;
use App\Models\Crew;
use Illuminate\Http\Request;


class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener los datos 
        $search = $request->input('search'); // Búsqueda por nombre
        $capacity = $request->input('capacity'); // Búsqueda por capacidad
    
        // Iniciar consulta base
        $query = Crew::query();
    
        // Filtrar por nombre 
        if (!empty($search)) {
            $query->where('name', 'like', "%{$search}%");
        }
    
        // Filtrar por capacidad 
        if (!empty($capacity)) {
            $query->where('capacity', '<=', (int)$capacity);
        }
    
        // Obtener resultados paginados y últimos 3 crews
        $crews = $query->paginate(10); // Mostrar 10 resultados por página
        $lastCrews = Crew::latest()->take(3)->get(); // Últimos 3 añadidos
    
        // Pasar los datos a la vista
        return view('back.crews.index', compact('crews', 'lastCrews', 'search', 'capacity'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.crews.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'slogan' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'foundation' => 'required|date',
        ]);

        // Crear el registro en la base de datos
        Crew::create($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('back.crews.index')->with('success', '¡Crew creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crew $crew)
    {
        return view('back.crews.show', compact('crew'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crew $crew)
    {
        return view('back.crews.edit', compact('crew'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crew $crew)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'slogan' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'foundation' => 'required|date',
        ]);
    
        // Actualizar el registro en la base de datos
        $crew->update($validated);
    
        // Redirigir con mensaje de éxito
        return redirect()->route('back.crews.index')->with('success', '¡Peña actualizada exitosamente!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crew $crew)
    {
        // Eliminar el registro de la base de datos
        $crew->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('back.crews.index')->with('success', '¡Peña eliminada exitosamente!');
    }
}