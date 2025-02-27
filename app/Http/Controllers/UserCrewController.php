<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserCrewController extends Controller
{
    public function requestMembership(Crew $crew)
    {
        $user = Auth::user();

        // Verificar si ya existe una solicitud pendiente o confirmada
        if ($crew->users()->where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'Ya has solicitado unirte a esta peña.');
        }

        // Crear la solicitud de membresía
        $crew->users()->attach($user->id, ['year' => now()->year, 'confirmed' => false]);

        return redirect()->back()->with('success', 'Solicitud de membresía enviada.');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserCrewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserCrew $userCrew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserCrew $userCrew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserCrewRequest $request, UserCrew $userCrew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCrew $userCrew)
    {
        //
    }
}