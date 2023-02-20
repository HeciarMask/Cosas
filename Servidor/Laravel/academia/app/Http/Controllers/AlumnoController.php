<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{

    protected $alumnos;
    public function __construct(Alumno $alumnos)
    {
        $this->alumnos = $alumnos;
    }
    public function index()
    {
        $alumnos = Alumno::sortable()->paginate(9);
        return view('alumnos.lista', ['alumnos' => $alumnos]);
    }
    public function create()
    {
        return view('alumnos.crear');
    }
    public function store(Request $request)
    {
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }
    public function show($id)
    {
        //$alumno = $this->alumnos->obtenerAlumnoPorId($id);
        $alumno = Alumno::find($id);
        $cursosAlumno = $alumno->cursos()->orderBy('nombre')->get();
        return view('alumnos.ver', ['alumno' => $alumno, 'cursos' => $cursosAlumno]);
    }
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.editar', ['alumno' => $alumno]);
    }
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }
    public function destroy($id)
    {
        if (DB::table('alumno_curso')->where('alumno_id', '=', $id)->first() == null) {
            $alumno = Alumno::find($id);
            $alumno->delete();
        }
        return redirect()->action([AlumnoController::class, 'index']);
    }

}