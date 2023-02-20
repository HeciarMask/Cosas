<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Curso;
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores=Profesor::all();
        return view('profesores.lista',['profesores'=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo=new Profesor($request->all());
        $nuevo->save();
        return redirect()->action([ProfesorController::class,'index']);
    }

    /**
     * Disp lay the spec ified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $elProfesor=Profesor::find($id);
         $cursosImpartidos=$elProfesor->cursos()->orderBy('nombre')->get();
         return view('profesores.ver',array('profesorActual'=>$elProfesor,'susCursos'=>$cursosImpartidos));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor=Profesor::find($id);
        return view('profesores.editar',array('profesor'=>$profesor));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $actualizado=Profesor::find($id);
        /* cambio el contenido de las columnas de la fila
        por lo que se ha tecleado en el formulario*/
        $actualizado->nombre_apellido=$request->nombre_apellido;
        $actualizado->profesion=$request->profesion;
        $actualizado->telefono=$request->telefono;
        $actualizado->grado_academico=$request->grado_academico;
        /* almacenar cambios */
        $actualizado->save();
        /* volver a la lista */
        return redirect()->action([ProfesorController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $borrar=Profesor::find($id);
        /*lo borro*/
        $borrar->delete();
        /* volver a la lista */
        return redirect()->action([ProfesorController::class,'index']);
    }
}
