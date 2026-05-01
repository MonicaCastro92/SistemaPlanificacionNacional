<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaPnd extends Model
{
    protected $fillable = [
    'objetivo_pnd_id',
    'anio',
    'valor'
];

public function objetivo()
{
    return $this->belongsTo(ObjetivoPnd::class);
}
    use HasFactory;
}
