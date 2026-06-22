<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Courses;
use App\Models\TrainingCenters;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function create()
    {
        return view('Courses.create', [
            'areas' => Areas::all(),
            'training_centers' => TrainingCenters::all(),
        ]);
    }

    public function store(Request $request)
    {
        $course = Courses::create($request->all());

        return response()->json($course);
    }

    public function show(Courses $course)
    {
        return view('Courses.show', compact('course'));
    }
}
