<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }



    public function login(Request $request)
    {        
        $credentials = $request->only('email', 'password');
        try {
            if ($token = auth('api')->attempt($credentials)) {
                return $this->respondWithToken($token); //OK
            } else {
                return response()->json(['error' => 'Credenciales inválidas'], 400);                
            }
        } catch (JWTException $e) {
              \Log::error($e->getMessage());
            return response()->json(['error' => 'No se pudo crear el token'], 500);
        }
    }


    protected function respondWithToken($token, $status = 200)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], $status);
    }

    public function me()
    {
        return response()->json(Auth::user());
    }

    
}//class

