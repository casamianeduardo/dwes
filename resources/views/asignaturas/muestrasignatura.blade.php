<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Te estoy dando informacion del modulo</h2>
    <table>
    <tr>
        <th>Nombre del modulo</th>
        <td>{{ $nombremodulo }}</td>
    </tr>
    <tr>
        <th>Ciclo</th>
        <td>{{ $ciclo }}</td>
    </tr>
    
    </table>

    @if ( $nombremodulo == "dwes" )
        <p>Estoy en entorno Servidor</p>
    @else
        <p>Estoy en entorno cliente</p>
    @endif


    <h4>Departamento y ubicacion del mismo</h4>
    @foreach( $departamentos as $dpto)
        {{ $dpto }}<br>

    @endforeach

</body>
</html>