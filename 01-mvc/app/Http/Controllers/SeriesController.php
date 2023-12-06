<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index()
    {
        $series = Serie::orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    function create()
    {
        return view('series.create');
    }

    function store(Request $request)
    {
        Serie::create($request->all());

        return to_route('series.index');
    }
}
