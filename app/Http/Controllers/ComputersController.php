<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computers;

class ComputersController extends Controller
{
    public function create()
    {
        return view('computer.create'); 
    }

    public function store(Request $request)
    {
        $computer = Computers::create($request->all());

        return redirect()->back();
    }
}
