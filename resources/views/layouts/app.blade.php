<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/form-style.css') }}">
</head>
<body>
    <nav style="background:#2563eb; padding:1rem; margin-bottom:2rem;">
        <a href="{{ route('computer.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Computadores</a>
        <a href="{{ route('training_center.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Centro</a>
        <a href="{{ route('area.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Áreas</a>
        <a href="{{ route('course.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Cursos</a>
        <a href="{{ route('apprentice.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Aprendices</a>
        <a href="{{ route('teacher.create') }}" style="color:white; margin-right:1rem; text-decoration:none;">Instructores</a>
        <a href="{{ route('course_teacher.create') }}" style="color:white; text-decoration:none;">Curso-Prof</a>
    </nav>
    
    @yield('content')
</body>
</html>