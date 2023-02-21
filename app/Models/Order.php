<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //esta funcion es para establecer la relacion
    //order belongsTo pertenece a cliente
    public function clientes(){
        //return $this->belongsTo(Cliente::class); //relacion 1:N
        return $this->belongsToMany(Cliente::class); //relacion N:M
    }
}
