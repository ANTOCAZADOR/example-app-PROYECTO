<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO</h1>
    <form action="/guardar-formulario"method="POST">
        @csrf
        <label for= "nombre">Nombre:</label<br>
        <input type="text" name="nombre"><br>

        <label for= "correo">Correo:</label<br>
        <input type="text" name="correo"><br>

        <label for= "mensaje">Mensaje:</label<br>
        <textarea type="text" name="mensaje"></textarea><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>