<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    public function create()
    {
        return view('Area.create'); 
    }

    public function store(Request $request)
    {
        $area = Areas::create($request->all());

        return response()->json($area);
    }

    public function show(Areas $area)
    {
        return view('Area.show', compact('area'));
    }
}