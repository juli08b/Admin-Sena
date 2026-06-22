<?php

namespace App\Http\Controllers;

use App\Models\Apprentices;
use App\Models\Computers;
use App\Models\Courses;
use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    public function create()
    {
        return view('Apprentices.create', [
            'courses' => Courses::all(),
            'computers' => Computers::all(),
        ]);
    }

    public function store(Request $request)
    {
        $apprentice = Apprentices::create($request->all());

        return response()->json($apprentice);
    }

    public function show(Apprentices $apprentice)
    {
        return view('Apprentices.show', compact('apprentice'));
    }
}
