<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de funciones</title>
</head>
<body>

    <a href="{{route('funciones.create')}}">Agregar Pelicula</a>
    <h1>Funciones</h1>
    @if(Session::has('exito'))
    <p>{{Session::get('exito')}}</p>
    @endif

    @if(Session::has('error'))
    <p>{{Session::get('error')}}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Película</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funciones as $funcion)
                <tr>
                    <td>{{$funcion->pelicula}}</td>
                    <td>{{$funcion->fecha}}</td>
                    <td>{{$funcion->hora}}</td>
                    <form method= "post" action= "{{route('funciones.destroy', $funcion->id)}}">
                <!-- metodo para que funcione el Post (POST METHOD IS NOT SUPORTED FOR THIS ROUTE) -->
                @csrf
                @method ('delete')
                <td>
                        
                        <button type="submit">Eliminar</button>
                    </td>

                </form>  
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>