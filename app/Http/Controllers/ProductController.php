<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()//esta funcion hace que solo pueda llegar al home los usuarios logueados
    {
        $this->middleware('auth');
        session(['contador' => '0']);//inicializar el cnotador de sesion
        // $this->middleware('auth')->only('index');//esta para que solo suceda lo del comentario de arriba en el index
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Product::class);//aplica la politica del viewany 
        $productList = Product::all(); //Eloquent ORM
        //return $productList;
        return view('product.index',['productList'=>$productList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Product::class);
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'

        ],[
            'nombre.required' => 'Debes rellenar el nombre',
            'nombre.max' => 'El nombre no puede exceder los 100 caracteres',
            'descripcion.required' => 'Debes rellenar la descripcion',
            'precio.gt' => 'El precio ha de ser mayor que cero'

        ]);

        /*
        //buscar el id del producto que vamos a actualizar con los campos del formulario
        $p = new Product();//creamos objeto de tipo producto
        $p->nombre = $request->input("nombre");//rellenamos los campos con 
        $p->descripcion = $request->input("descripcion");
        $p->precio = $request->input("precio");
        $p->save();
        */
        $this->authorize('create',Product::class);//aplica la politica
        Product::create($request->all());//esta linea equivale a hacer lo comentado de arriba, para poder hacer esto añadir en app/model/Product la linea con $fillable

         //devolver la vista 
         return redirect()->route('products.index')->with('Exito','Producto añadido correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscar el producto y devolver vista
        $product = Product::find($id);
        $this->authorize('view',$product);//esta linea es para aplicar politica(La politica esta en ProductPolicy)
        //return $product;
        //si visita productos de $id pares incrementa contador(del index), y la variable color(en la vista del show) sera rojo, si son impares lo pone a cero
        if($id % 2 ==0){
            session()->increment('contador');
            session(['color' => 'rojo']);
        }else{
            $contador = 0;
            session(['color' => 'verde']);
            session(['contador' => $contador]);
        }
        //devolver vista
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            
            //buscar el producto y devolver vista
            $product = Product::find($id);
            $this->authorize('update',$product);
            //return $product;
            //devolver vista
            return view('product.edit', ['product' => $product]);
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
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'

        ],[
            'nombre.required' => 'Debes rellenar el nombre',
            'nombre.max' => 'El nombre no puede exceder los 100 caracteres',
            'descripcion.required' => 'Debes rellenar la descripcion',
            'precio.gt' => 'El precio ha de ser mayor que cero'

        ]);
        
        
        //buscar el id del producto que vamos a actualizar con los campos del formulario
        $p = Product::find($id);
        $this->authorize('view',$p);;//aplica la politica
        $p->nombre = $request->input("nombre");
        $p->descripcion = $request->input("descripcion");
        $p->precio = $request->input("precio");
        $p->save();//save es un metodo de eloquent
        //aqui ya hemos actualizado el product 
        //ahora devolvemos la vista. 
        return redirect()->route('products.index')->with('Exito','Producto actualizado correctamente');
        //el mensaje del with Exito producto actualizado nos lo tiene qu explicar aun para que .
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscar el id del producto que vamos a eliminar 
        $p = Product::find($id);
        $this->authorize('view',$p);//aplica la politica
        $p->delete();
        //aqui ya hemos borrado el producto
        //devolver la vista 
        return redirect()->route('products.index')->with('Exito','Producto eliminado correctamente');


    }
}
