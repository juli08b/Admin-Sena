<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Computadores</h1>
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="numero">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="marca">
        </label>
        <br>


        <button type="submit">Enviar Formulario:</button>
</body>
</html>