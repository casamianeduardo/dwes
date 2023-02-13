@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($message = Session::get('exito'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif


<h1>Lista de clientes:</h1>
    <a class="btn btn-primary" href="{{ route('clientes.create') }}">Nuevo Cliente</a>
    <table class="table table-striped">
    
    @foreach($clienteList as $cliente)
    <tr>
        <td>{{ $cliente->dni }}</td>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->apellidos }}</td>
        <td>{{ $cliente->telefono }}</td>
        <td>{{ $cliente->email }}</td>

        <td>
            <a href="{{ route('clientes.edit',$cliente->id)}}" class="btn btn-primary">Editar</a>
        </td>
        
        <td>
            <a href="{{ route('clientes.show',$cliente->id)}}" class="btn btn-primary">Ver</a>
        </td>

        <td>
        <form action="{{ route('clientes.destroy',$cliente->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-primary" type="submit">Borrar</button>


        </form>
        </td>

    </tr>

    @endforeach

    </table>


    </div>
    </div>
</div>
@endsection

