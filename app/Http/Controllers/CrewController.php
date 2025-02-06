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
        return response()->json($crews);
    }

    // Crear un nuevo crew
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'foundation' => 'required|date',
        ]);

        $crew = Crew::create($validated);
        return response()->json($crew, 201);
    }

    // Actualizar un crew existente
    public function update(Request $request, $id)
    {
        $crew = Crew::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'foundation' => 'required|date',
        ]);

        $crew->update($validated);
        return response()->json($crew);
    }

    // Eliminar un crew
    public function destroy($id)
    {
        $crew = Crew::findOrFail($id);
        $crew->delete();
        return response()->json(null, 204);
    }
}
