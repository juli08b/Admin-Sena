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
        $validated = $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'nullable|exists:areas,id',
            'training_center_id' => 'nullable|exists:training_centers,id',
        ]);

        $course = Courses::create($validated);

        return redirect()->route('course.show', $course);
    }

    public function show(Courses $course)
    {
        return view('Courses.show', compact('course'));
    }
}
