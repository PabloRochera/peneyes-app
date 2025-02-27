<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Location;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    const MAX_HEIGHT = 5;
    const MAX_WIDTH = 5;

    public function index()
    {
        $year = now()->year;
        $locations = Location::where('year', $year)->with('crew')->get();
        $showDrawButton = $locations->count() === 0;

        return view('back.draws.index', [
            'locations' => $locations,
            'year' => $year,
            'showDrawButton' => $showDrawButton,
            'maxHeight' => self::MAX_HEIGHT,
            'maxWidth' => self::MAX_WIDTH
        ]);
    }

    public function show($year = null)
    {
        $currentYear = now()->year;
        if (is_null($year)) {
            $year = $currentYear;
        }
        $locations = Location::where('year', $year)->with('crew')->get();
        $showDrawButton = $locations->count() === 0;

        $rangeYears = range($currentYear - 4, $currentYear);
        rsort($rangeYears);

        return view('back.draws.index', [
            'locations' => $locations,
            'year' => $year,
            'showDrawButton' => $showDrawButton,
            'maxHeight' => self::MAX_HEIGHT,
            'maxWidth' => self::MAX_WIDTH
        ]);
    }

    public function draw(Request $request)
    {
        $year = $request->year ?? now()->year;
        $crews = Crew::all()->pluck('name', 'id');
        $locations = Location::where('year', $year)->get();

        if (count($crews) === 0) {
            return back()->withErrors('No hay peñas disponibles para este año.');
        }

        // Eliminar ubicaciones anteriores
        Location::where('year', $year)->delete();

        $places = [];
        $nCrews = count($crews);

        foreach ($crews as $crewId => $crewName) {
            $isValidCoord = false;
            while (!$isValidCoord) {
                $x = rand(0, (self::MAX_WIDTH - 1));
                $y = rand(0, (self::MAX_HEIGHT - 1));
                // Solo permitir coordenadas en los bordes
                if ($x == 0 || $x == self::MAX_WIDTH - 1 || $y == 0 || $y == self::MAX_HEIGHT - 1) {
                    $coord = [$x, $y];
                    $isValidCoord = $this->isValidCoord($coord, $places);
                    if ($isValidCoord) {
                        $places[$crewId] = $coord;
                    }
                }
            }
        }

        $locations = [];
        foreach ($places as $crewId => $coord) {
            $locations[] = [
                'x_coordinate' => $coord[0],
                'y_coordinate' => $coord[1],
                'crew_id' => $crewId,
                'year' => $year
            ];
        }

        foreach ($locations as $location) {
            Location::create($location);
        }

        return redirect()->route('draw.show', ['year' => $year]);
    }

    private function isValidCoord($coord, $places)
    {
        foreach ($places as $place) {
            if ($place[0] == $coord[0] && $place[1] == $coord[1]) {
                return false;
            }
        }
        return true;
    }

    // Nuevo método para la API de sorteo (retorna JSON)
    public function apiDraw()
    {
        $year = now()->year;
        $locations = Location::where('year', $year)->with('crew')->get();
        return response()->json($locations);
    }
}
