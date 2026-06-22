@extends('layouts.app')

@section('title', 'Curso - Profesor')

@section('content')
    <h1>Curso - Profesor</h1>
    <form action="{{ route('course_teacher.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label for="course_id">Curso:</label>
        
         <select name="course_id" id="course_id" class="form-control">
                <option value="">Seleccione un curso</option>
                
                @foreach($courses as $course)

                <option value="{{ $course->id }}">
                    {{ $course->course_number }}
                </option>

                @endforeach
            </select>
        <br>

        <label for="teacher_id">Profesor:</label>
        
         <select name="teacher_id" id="teacher_id" class="form-control">
                <option value="">Seleccione un profesor</option>
                
                @foreach($teachers as $teacher)

                <option value="{{ $teacher->id }}">
                    {{ $teacher->name }}
                </option>

                @endforeach
            </select>
        <br>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection