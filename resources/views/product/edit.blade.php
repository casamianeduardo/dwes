@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


<h1>Detalle de producto:</h1>

<a href="{{route('products.index')}}" class="btn btn-primary">Lista</a>
<a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a>

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

        <input type="submit" value="Actualizar">

    </form>
    



    </div>
    </div>
</div>
@endsection

