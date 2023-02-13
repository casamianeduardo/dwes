@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


<h1>Alta de producto:</h1>

<a href="{{route('products.index')}}" class="btn btn-primary">Lista</a>

@if($errors->any())
<div class="alert alert-danger">
<h6>Por favor corrige los siguientes errores:</h6>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <div>
@endif

    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div>
        Nombre: <input type="text" name="nombre" id="" >
        </div>
        <div>
        Descripcion: <input type="text" name="descripcion" id="" >
        </div>
        <div>
        Precio: <input type="text" name="precio" id="" >
        </div>

        <button class="btn btn-primary" type="submit">Añadir</button>

    </form>
    



    </div>
    </div>
</div>
@endsection