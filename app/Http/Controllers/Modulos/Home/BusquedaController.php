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
        $resultados = DB::select("SELECT * FROM bdp_sitio, bdp_evento, bdp_imagen WHERE "
                . "sit_nombre LIKE '%$buscar%' OR eve_nombre LIKE '%$buscar%' AND "
                . "bdp_sitio.sit_id=bdp_imagen.sit_id");
    	return view('Modulos.Home.busqueda', compact("resultados"));
    }
    
}
