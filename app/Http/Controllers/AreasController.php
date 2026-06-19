<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    public function create()
    {
        return view('area.create'); 
    }

    public function store(Request $request)
    {
        $area = Areas::create($request->all());

        return redirect()->back();
    }
}