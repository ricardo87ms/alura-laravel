<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = Serie::get();

        return view('series.index')->with('series', $series);
    }

    function create()
    {
        return view('series.create');
    }

    function store(Request $request)
    {
        $nomeSerie = $request->nome;

        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('series');
    }
}
