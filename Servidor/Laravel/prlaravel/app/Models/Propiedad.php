<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = "propiedades";
    protected $filleable = ["numpropiedad", "domicilio", "localidad", "tipo", "m2", "precio", "vendida", "dni_propietario"];

    public function localidades()
    {
        $this->hasOne(Localidad::class);
    }

    public function tipos_vivienda()
    {
        $this->hasOne(TipoVivienda::class);
    }

    public function propietarios_clientes()
    {
        $this->hasOne(Propietario::class);
    }
}