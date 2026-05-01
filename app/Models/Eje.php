<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eje extends Model
{
    protected $fillable = [
    'nombre',
    'descripcion'
];
public function objetivos()
{
    return $this->hasMany(ObjetivoPnd::class);
}

    use HasFactory;
}
