<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingCenters;

class TrainingCentersController extends Controller
{
    public function create()
    {
        return view('training_center.create'); 
    }

    public function store(Request $request)
    {
        $training_center = TrainingCenters::create($request->all());

        return redirect()->back();
    }
}
