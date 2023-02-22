<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $table = "propietario_clientes";
    protected $filleable = ["dni", "tipo", "usuario", "clave", "telefono"];

    public function propiedades()
    {
        $this->hasMany(Propiedad::class);
    }
}