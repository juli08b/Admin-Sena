<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Teachers;
use App\Models\TrainingCenters;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function create()
    {
        return view('Teachers.create', [
            'areas' => Areas::all(),
            'training_centers' => TrainingCenters::all(),
        ]);
    }

    public function store(Request $request)
    {
        $teacher = Teachers::create($request->all());

        return response()->json($teacher);
    }

    public function show(Teachers $teacher)
    {
        return view('Teachers.show', compact('teacher'));
    }
}
