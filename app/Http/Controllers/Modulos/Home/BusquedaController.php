<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class BusquedaController extends Controller
{
    function getIndex(){
    	return view('Modulos.Home.busqueda');
    }
    function postBuscar(){
        $buscar = filter_input(INPUT_POST, "buscar");
        $resultados = DB::select("SELECT * FROM bdp_sitio, bdp_evento WHERE "
                . "sit_nombre LIKE '%$buscar%'");
    	return view('Modulos.Home.busqueda', compact("resultados"));
    }
    
}
