@extends('layouts.master');<!--Vamos a hacer que create.blade.php herede del padre -->

@section('title','Alta Asignaturas')



@section('encabezado')
Alta de Asignaturas
@stop

@section('cuerpo')
@parent
@if($errors->any())
<div class="alert alert-danger">
<h6>Por favor corrige los siguientes errores:</h6>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <div>
@endif
<form action="{{ route ('asignaturas.store') }}" method="post">
    @csrf<!--Cualquier formulario en laravel va a necesitar esta linea, sino no funcionara, y dara error 419 el navegador -->
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
    <br><br>
    <label for="curso">Curso</label><br>
    <input type="text" name="curso" id="curso" value="{{old('curso')}}">
    <br><br>
    <label for="ciclo">Ciclo</label><br>
    <input type="text" name="ciclo" id="ciclo" value="{{old('ciclo')}}">
    <br><br>
    <label for="comentario">Comentario</label><br><br>
    <textarea name="comentario" id="comentario" cols="10" rows="5" placeholder="Escribe aqui tus comentarios"></textarea>
    <br><br>
<br><br> 
@stop


@section('boton')
    @parent

    @section('destino')
    {{ route ('asignaturas.store') }}

    @stop

    @section('accionformulario')
        Enviar
    @stop
    </form>
@stop

