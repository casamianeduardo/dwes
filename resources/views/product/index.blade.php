@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($message = session('exito'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

<br>
{{ session('contador')}}
<br>
<h1>Lista de productos:</h1>  


@can('create', App\Models\Product::class)
    <a class="btn btn-primary" href="{{ route('products.create') }}">Nuevo Producto</a>
@endcan
        
    <table class="table table-striped">
    
    @foreach($productList as $product)
    <tr>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->descripcion }}</td>
        <td>{{ $product->precio }}</td>

        <td>
        @can('update', $product)
            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Editar</a>
        @endcan
        </td>
        
        <td>
        @can('view', $product)
            <a href="{{ route('products.show',$product->id)}}" class="btn btn-primary">Ver</a>
        @endcan
        </td>

        <td>
        @can('delete', $product)
        <form action="{{ route('products.destroy',$product->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-primary" type="submit">Borrar</button>


        </form>
        @endcan
        </td>

    </tr>

    @endforeach

    </table>


    </div>
    </div>
</div>
@endsection

