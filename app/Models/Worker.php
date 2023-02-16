<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = ["name","password","role"];

    public function center(){
        return $this->belongsTo(Center::class)->withPivot('date');;
    }
}
