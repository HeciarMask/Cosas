<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Alumno extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = "alumnos";
    protected $hidden = ["id"];
    protected $fillable = ["nombre", "apellido", "edad", "direccion", "telefono"];

    public $sortable = [
        'nombre',
        'apellido',
        'edad'
    ];
    //un alumno puede matricularse en muchos cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}