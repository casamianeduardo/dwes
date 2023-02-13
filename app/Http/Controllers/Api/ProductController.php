<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// Se debería devolver un objeto con una propiedad como mínimo data y el array de resultados en esa propiedad.
// A su vez también es necesario devolver el código HTTP de la respuesta.
public function index()
{
    $product = Product::all();//recuperar todos los productos
    return response()->json(['status' => 'ok', 'data' => $product], 200);//response con los datos en formato json
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'
        ]);
     

        //si falla validacion -> 422
        if($validated->fails()){
            return response()->json(["status" => "NOK","data"=>$validated->errors()],422);
        }

        //si no falla crear un nuevo producto
        $newproduct = Product::create($request->all());
        return response()->json(["status" => "ok","data"=>$newproduct],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    // Corresponde con la ruta /products/{id}
    // Buscamos un product por el ID.
    $product=Product::find($id);

    // Chequeamos si encontró o no el Product
    if (! $product)//si no lo encuentra:
    {
        // Se devuelve un array errors con los errores detectados y código 404
        return response()->json(['errors'=>(['code'=>404,'message'=>'No se encuentra un Product con ese código.'])],404);
    }

    // Devolvemos la información encontrada.
    return response()->json(['status'=>'ok','data'=>$product],200);
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

    // Buscamos un product por el ID.
    $product=Product::find($id);

    // Chequeamos si encontró o no el Product
    if (! $product)//si no lo encuentra:
    {

    // Se devuelve un array errors con los errores detectados y código 404
    return response()->json(['errors'=>(['code'=>404,'message'=>'No se encuentra un Product con ese código.'])],404);
    }
    $validated = Validator::make($request->all(),[
        'nombre' => 'required|max:100',
        'descripcion' => 'required',
        'precio' => 'required|gt:0'
    ]);

    //si falla validacion -> 422
    if($validated->fails()){
        return response()->json(["status" => "NOK","data"=>$validated->errors()],422);
    }

    $product->fill($request->all());//relleno con los datos el objeto
    $product->save();//guardo en bdd
    return response()->json(["status" => "ok","data" =>$product],200);



   

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // Buscamos un product por el ID.
    $product=Product::find($id);

    // Chequeamos si encontró o no el Product
    if (! $product)//si no lo encuentra:
    {

    // Se devuelve un array errors con los errores detectados y código 404
    return response()->json(['errors'=>(['code'=>404,'message'=>'No se encuentra un Product con ese código.'])],404);
    }//cierra el if

    try {
        $product->delete();
        //todo ok = 204
        return response()->json(['Borrado correctamente'],204);
    } catch (\Throwable $th) {
        return response()->json(['status'=>'NOK','mensaje'=>$th->getMessage()],409);
    }//ciera try/cathc

    }//cierra function destroy
}
