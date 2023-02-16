<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    public function partners(){
        return $this->belongsToMany(Partner::class);
    }

    public function centers(){
        return $this->belongsToMany(Center::class);
    }
}
