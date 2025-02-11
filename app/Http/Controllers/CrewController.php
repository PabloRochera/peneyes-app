<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    // Listar todos los crews
    public function index()
    {
        $crews = Crew::all();
        return view('back.crews.index', compact('crews'));
    }

    // Mostrar formulario para crear un nuevo crew
    public function create()
    {
        return view('back.crews.create');
    }

    // Guardar un nuevo crew
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'foundation' => 'required|date',
        ]);

        Crew::create($validated);
        return redirect()->route('crews.index')->with('success', 'Crew creado correctamente');
    }

    // Mostrar formulario para editar un crew existente
    public function edit($id)
    {
        $crew = Crew::findOrFail($id);
        return view('back.crews.edit', compact('crew'));
    }

    // Actualizar un crew
    public function update(Request $request, $id)
    {
        $crew = Crew::findOrFail($id);
        $crew->update($request->all());
        return redirect()->route('crews.index')->with('success', 'Crew actualizado correctamente');
    }
    public function showCrews()
    {
        $crews = Crew::all();
        return view('front.crews.show', compact('crews'));
    }
    
    // Eliminar un crew
    public function destroy($id)
    {
        $crew = Crew::findOrFail($id);
        $crew->delete();
        return redirect()->route('crews.index')->with('success', 'Crew eliminado correctamente');
    }
}
