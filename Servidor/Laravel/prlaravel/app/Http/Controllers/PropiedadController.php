<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use App\Models\TipoVivienda;
use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $propiedades = Propiedad::all(); */
        $min = DB::table("propiedades")->select((DB::raw('min(precio) as minim')))->get();
        $max = DB::table("propiedades")->select((DB::raw('max(precio) as maxim')))->get();
        $tipos = TipoVivienda::all();
        $localidades = Localidad::all();
        return view(
            'propiedades.buscar',
            array("tipos" => $tipos, "localidades" => $localidades, "minimo" => $min, "maximo" => $max)
        );
    }

    public function buscar(Request $request)
    {
        $op = "IN";
        $localidad = $request->input("localidad");
        if ($localidad == 0) $localidad = "%%";
        $orden = $request->input("orden");
        $precioMin = $request->input("minimo");
        $precioMax = $request->input("maximo");
        $dataTipo = $request->input("tipo");
        if (gettype($dataTipo) != "array") {
            $op = "LIKE";
            $dataTipo = "%";

            $propiedades = DB::table("propiedades")
                ->join('localidades', 'localidades.id', '=', 'propiedades.localidad')
                ->join("tipos_vivienda", "tipos_vivienda.id", "=", "propiedades.tipo")
                ->select("localidades.nombre as localidad", "domicilio", "tipos_vivienda.nombre as tipo", "precio")
                ->where([
                    ['localidad', 'LIKE', $localidad],
                    ['tipo', $op,  $dataTipo],
                    ['precio', '<=', $precioMax],
                    ['precio', '>=', $precioMin],
                    ['vendida', 'LIKE', 'NO'],
                ])->orderBy("precio", $orden)->get();
        } else {
            $propiedades = DB::table("propiedades")
                ->join('localidades', 'localidades.id', '=', 'propiedades.localidad')
                ->select("localidades.nombre as localidad", "domicilio", "tipos_vivienda.nombre as tipo", "precio")
                ->where([
                    ['localidad', 'LIKE', $localidad],
                    ['precio', '<=', $precioMax],
                    ['precio', '>=', $precioMin],
                    ['vendida', 'LIKE', 'NO'],
                ])->whereIn('tipo', $dataTipo)->orderBy("precio", $orden)->get();
        }


        return view('propiedades.mostrar', array("propiedades" => $propiedades));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
