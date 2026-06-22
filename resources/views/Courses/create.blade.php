@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>
    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número de curso:
            <br>
            <input type="text" name="course_number">
        </label>
        <br>

        <label>
            Día:
            <br>
            <input type="text" name="day">
        </label>
        <br>

        <label for="area_id">Área:</label>
        
         <select name="area_id" id="area_id" class="form-control">
                <option value="">Seleccione un área</option>
                
                @foreach($areas as $area)

                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>

                @endforeach
            </select>
        <br>

         <label for="training_center_id">Centro de Formación:</label>
        
         <select name="training_center_id" id="training_center_id" class="form-control">
                <option value="">Seleccione un centro de formación</option>
                
                @foreach($training_centers as $training_center)

                <option value="{{ $training_center->id }}">
                    {{ $training_center->name }}
                </option>

                @endforeach
            </select>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection