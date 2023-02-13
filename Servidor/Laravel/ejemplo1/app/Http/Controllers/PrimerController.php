<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    //
    public function recibirPost(Request $request){
    	$datos=$request->all();
    	return view('formulario.mostrar0',array('losDatos'=>$datos));

    }
}
