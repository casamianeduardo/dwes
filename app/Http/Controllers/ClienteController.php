<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function __construct()//esta funcion hace que solo pueda llegar al home los usuarios logueados
    {
        $this->middleware('auth');
        // $this->middleware('auth')->only('index');//esta para que solo suceda lo del comentario de arriba en el index
    }   // $this->middleware('auth')->except('index');//protege todas las paginas de lo de arriba excepto el index

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clienteList = Cliente::all(); //Eloquent ORM
        return $clienteList;        
        //return view('cliente.index',['clienteList'=>$clienteList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        //buscar el cliente y devolver vista
        $cliente = Cliente::find($id);
        return $cliente;
        //devolver vista
        //return view('cliente.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //buscar el producto y devolver vista
        $cliente = Cliente::find($id);
        return $cliente;
        //devolver vista
        //return view('cliente.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
