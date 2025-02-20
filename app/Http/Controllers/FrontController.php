<?php

namespace App\Http\Controllers;
use App\Models\Crew;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {   $dataToView = [
            'crews' => Crew::all(),
            'draws' => []
        ];
        return view('front.homeFront', $dataToView);
    }
}
