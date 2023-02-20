<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table="profesores";
    //protected $primaryKey="id";
    protected $fillable=['nombre_apellido','profesion','grado_academico','telefono'];
    protected $hidden=['id'];
    //un profesor imparte muchos cursos
    public function cursos(){

    	return $this->hasMany(Curso::class);
    }
}
