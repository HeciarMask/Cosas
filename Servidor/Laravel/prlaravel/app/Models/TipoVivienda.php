<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVivienda extends Model
{
    use HasFactory;
    protected $table = "tipos_vivienda";
    protected $filleable = ["nombre"];

    public function propiedades()
    {
        $this->belongsToMany(Propiedad::class);
    }
}