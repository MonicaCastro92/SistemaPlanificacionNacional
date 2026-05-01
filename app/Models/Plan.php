<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_plan',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'user_id'
    ];

    // 🔗 Relación: un plan pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}