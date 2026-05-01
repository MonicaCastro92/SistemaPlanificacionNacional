<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $fillable = [
        'codigo',
        'subsector',
        'nivel_gobierno',
        'estado'
    ];
    public function users()
{
    return $this->hasMany(User::class);
}
}