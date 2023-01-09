<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // muestra el formulario de alta de una asignatura
         return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recoge los datos del formulario de alta
        //Aqui iria la logica de insertar en la bbdd.  save(modelo)
        /*
        $nombre = $request->input('nombre');//asi recogemos los datos del formulario con larabel
        $curso = $request->input('curso');
        $ciclo = $request->input('ciclo');
        $comentario = $request->input('comentario');

        dd($nombre,$curso,$ciclo,$comentario);//los muestro
        */

        $datos =$request->validate([
            'nombre'=>'required|max:7',
            'curso'=>'required|size:1|integer|regex:/[1-2]/',
            'ciclo'=>'required|size:3|regex:/DA[M,W]/'

        ],[
            'nombre.required' => 'Debes rellenar el nombre',
            'curso.required' => 'Debes rellenar el curso y ha de ser con un numero',
            'ciclo.required' => 'Debes rellenar el ciclo, no puede estar vacio',
            'nombre.max' => 'El nombre solo puede tener un maximo de 7 caracteres',
            'curso.integer' => 'El curso debe ser un entero',
            'curso.regex' => 'El curso debe estar comprendido entre 1 y 2',
            'curso.size' => 'El curso tiene que ser 1 o 2',
            'ciclo.regex' => 'El ciclo Debe ser DAM o DAW',
            'ciclo.size' => 'El ciclo solo puede tener 3 caracteres'

        ]
    
        );

        dd($datos);

        //Una forma de mostrar todos los datos en menos lineas :
            /*
            $datos = $request->all();
            dd($datos);
            */

            //para recoger solo algunos campos seria asi :
            /*$datos = $request->only('nombre','ciclo');
            dd($datos);


            para mostrar todos los campos menos alguno:

            $datos = $request->except('nombre');
            dd($datos);
            */

            // verificar que existe un campo en el formulario llamado nuevocampo
            /*
            if($request->has('nuevocampo')){
                dd($nuevocampo);
            }else{
                dd('el campo no existe');
            }
            */
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
