@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


<h1>Lista de productos:</h1>
    <a class="btn btn-primary" href="{{ route('products.create') }}">Nuevo Producto</a>
    <table class="table table-striped">
    
    @foreach($productList as $product)
    <tr>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->descripcion }}</td>
        <td>{{ $product->precio }}</td>

        <td>
            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Editar</a>
        </td>
        
        <td>
            <a href="{{ route('products.show',$product->id)}}" class="btn btn-primary">Ver</a>
        </td>

        <td>
        <a href="{{ route('products.destroy',$product->id)}}" class="btn btn-primary">Borrar</a>
        </td>

    </tr>

    @endforeach

    </table>


    </div>
    </div>
</div>
@endsection

