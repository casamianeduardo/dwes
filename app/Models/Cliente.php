<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ["dni","nombre","apellidos","telefono","email"];

    //esta funcion es para establecer la relacion
    //la clase que propaga el id hasMany-> la otra clase
    //si la relacion fuese 1 a 1 es igual pero con  public function order(EN SINGULAR), en vez de orders , y ->hasOne 
    public function orders(){
        //return $this->hasMany(Order::class); //relacion 1 a varios

        return $this->belongsToMany(Order::class); //relacion n:m varios a varios
        
    }
}
