<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO de {{$tipo_usuario}}</h1>
    <form action="/guardar-formulario"method="POST">
        @csrf
        @if($tipo_usuario =='cliente')
            <label for = "no_cliente" value="{{ old('no_cliente')}}" id="">no_cliente</label>
            <input type="text" name="no_cliente" value="{{ old('no_cliente')}}" id="no_cliente"><br>
        @endif

        <label for= "nombre">Nombre:</label<br>
        <input type="text" name="nombre" value="{{ old('nombre')}}"><br>

        <label for= "correo">Correo:</label<br>
        <input type="text" name="correo" value="{{ old('correo')}}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for= "mensaje">Mensaje:</label<br>
        <textarea type="text" cols='30' rows='4' name="mensaje">{{ old('mensaje')}}</textarea><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>