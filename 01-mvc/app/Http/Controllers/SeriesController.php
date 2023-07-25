<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = [
            'Supernatural',
            'Lost',
            'Daredevil'
        ];

        return view('listar-series', compact('series'));
    }
}
