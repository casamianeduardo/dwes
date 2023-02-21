<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    // Se debería devolver un objeto con una propiedad como mínimo data y el array de resultados en esa propiedad.
// A su vez también es necesario devolver el código HTTP de la respuesta.
public function index()
{
    // return Study::all();
    $studies = Study::all();

    return response()->json(['status' => 'ok', 'data' => $studies], 200);
}

public function show($id)
{
  // Corresponde con la ruta /studies/{study}
  // Buscamos un study por el ID.
  $study=Study::find($id);

  // Chequeamos si encontró o no el study
  if (! $study)
  {
    // Se devuelve un array errors con los errores detectados y código 404
    return response()->json(['errors'=>(['code'=>404,'message'=>'No se encuentra un studio con ese código.'])],404);
  }

  // Devolvemos la información encontrada.
  return response()->json(['status'=>'ok','data'=>$study],200);
}

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'code' => 'required|unique:studies,code|max:6',
        'name' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);            
    }

    $new = Study::create($request->all());
    return response()->json($new, 201);
}

public function update(Request $request, $id)
{
    $study = Study::find($id);
    //si no se encuentra 404
    if (!$study) {
        return response()->json([
            'status' => 404,
            'message' => 'No se ha encontrado un estudio con ese código'
        ], 404);
    }
    //si no valida 422
    $validator = Validator::make($request->all(), [
        'code' => 'required|unique:studies,code|max:6',
        'name' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);            
    }

    //todo ok 201
    $study->fill($request->all());
    $study->save();
    return response()->json([
        'status' => 'ok',
        'data' => $study
    ], 200);
}

//DRY. Don't Repeat Yourself
public function check404($study)
{
    if (!$study) {
        response()->json([
            'status' => 404,
            'message' => 'No se ha encontrado un estudio con ese id'
        ], 404)->send();
        die();
    }
}

public function destroy($id)
{
    $study = Study::find($id);
    $this->check404($study);

    try {
        //status 204: No content
        $study->delete();
        return response()->json([
            'Sin contenido'
        ], 204);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => 'error',
            'message' => 'Borrado fallido',
            'error_message' => $th->getMessage()
        ], 409);
    }
}

}//fin clase
