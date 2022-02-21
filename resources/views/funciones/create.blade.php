<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="{{route('funciones.index')}}">Lista Peliculas</a>
        <h1>Nueva noticia</h1>
        <form method="post" action="{{route('funciones.store')}}" >
            @csrf 
           
            <label>Pelicula</label>
            <input name="pelicula" type="text">
            <label>Fecha</label>
            <input name="fecha" type="date">
            <label>Hora</label>
            <input name="hora" type="text">
           
            <button type="submit">Guardar</button>

        </form>    
</body>
</html>