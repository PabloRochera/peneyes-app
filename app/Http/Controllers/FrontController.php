<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {   $dataToView = [
            'crews' => [],
            'draws' => []
        ];
        return view('front.homeFront', $dataToView);
    }
}
