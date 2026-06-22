<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computers;

class ComputersController extends Controller
{
    public function create()
    {
        return view('Computer.create'); 
    }

    public function store(Request $request)
    {
        $computer = Computers::create($request->all());

        return response()->json($computer);
    }

    public function show(Computers $computer)
    {
        return view('Computer.show', compact('computer'));
    }
}
