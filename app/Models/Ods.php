<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ods extends Model
{
    
     protected $fillable = [
        'numero',
        'nombre',
        'descripcion'
    ];

}
