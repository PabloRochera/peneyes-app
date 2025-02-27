<?php

namespace App\Http\Controllers;
use App\Models\Crew;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCrew;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {   
        $logedUser = Auth::user();
        $relatedCrew = UserCrew::where('user_id', $logedUser->id)->first();

        $dataToView = [
            'crews' => Crew::all(),
            'draws' => [],
            'relatedCrew' => $relatedCrew
        ];
        return view('front.homeFront', $dataToView);
    }
}
