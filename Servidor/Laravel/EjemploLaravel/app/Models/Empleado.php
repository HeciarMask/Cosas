<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Empleado extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = ['nombre', 'apellido', 'sueldo', 'departamento_id'];
    public $sortable = ["nombre", "apellido", "sueldo"];
    //un empleado trabaja en un departemento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    //Un empleado habla varios idiomas

    public function idiomas()
    {
        return $this->belongsToMany(Idioma::class);
    }
}