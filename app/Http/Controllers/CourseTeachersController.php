<?php

namespace App\Http\Controllers;

use App\Models\CourseTeachers;
use App\Models\Courses;
use App\Models\Teachers;
use Illuminate\Http\Request;

class CourseTeachersController extends Controller
{
    public function create()
    {
        return view('Course_Teacher.create', [
            'courses' => Courses::all(),
            'teachers' => Teachers::all(),
        ]);
    }

    public function store(Request $request)
    {
        $course_teacher = CourseTeachers::create($request->all());

        return response()->json($course_teacher);
    }

    public function show(CourseTeachers $course_teacher)
    {
        return view('Course_Teacher.show', compact('course_teacher'));
    }
}
