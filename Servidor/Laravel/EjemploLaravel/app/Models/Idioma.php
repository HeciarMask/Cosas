<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    //Un idioma lo hablan muchos empleados
    public function empleados()
    {
        return $this->belongsToMany(Empleado::class);
    }
}