<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Eje;
use App\Models\MetaPnd;
use App\Models\Ods;
class ObjetivoPnd extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'eje_id'
    ];

    public function eje()
    {
        return $this->belongsTo(Eje::class);
    }

    public function metas()
    {
        return $this->hasMany(MetaPnd::class);
    }
    public function ods()
    {
        return $this->belongsToMany(Ods::class, 'objetivo_pnd_ods');
    }   
}