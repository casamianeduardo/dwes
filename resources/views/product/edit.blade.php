@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


<h1>Detalle de producto:</h1>

<a href="{{route('products.index')}}" class="btn btn-primary">Lista</a>

@if($errors->any())
<div class="alert alert-danger">
<h6>Por favor corrige los siguientes errores:</h6>

    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
    <div>
@endif

    <form action="{{route('products.update',['product' => $product->id])}}" method="post">
        @csrf
        @method("PUT")
        <div>
        Nombre: <input type="text" name="nombre" id="" value="{{$product->nombre ?? ''}}">
        </div>
        <div>
        Descripcion: <input type="text" name="descripcion" id="" value="{{$product->descripcion ?? ''}}">
        </div>
        <div>
        Precio: <input type="text" name="precio" id="" value="{{$product->precio ?? ''}}">
        </div>

        <button class="btn btn-primary" type="submit">Actualizar</button>

    </form>
    



    </div>
    </div>
</div>
@endsection

