@extends('layouts.master')

@section('title','Pagina de Informacion')

@section('widget')
@parent<!--heredea el contenido de la plantilla(padre), y añado aqui mas codigo -->
    <h4>Esto es un añadido a la seccion del widget</h4>
@stop

@section('maincontent')<!--Sobreescribe con este codigo , en la plantilla(padre) y no muestra nada de la plantilla(padre master.blade.php) -->
    <!--si no pones el parent sobreescribes la seccion de la plantilla con esto -->
    <h4>Esto es contenido añadido al main content desde el hijo<h4>
    <p>Podemos añadir mas elementos como este parrafo</p>
@stop

@section('secondarycontent')
    <h2>Contenido secundario</h2>

    {{ $nombremodulo }} <!--Codigo blade para mostrar una variable -->
@stop
