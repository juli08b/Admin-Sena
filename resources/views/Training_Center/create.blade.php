<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Centro de Formación</h1>
    <form action="{{route('training_center.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>

        <label>
            Ubicacion:
            <br>
            <input type="text" name="ubicacion">
        </label>
        <br>


        <button type="submit">Enviar Formulario:</button>
</body>
</html>