<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class BusquedaController extends Controller
{
    function getIndex(){
    	return view('Modulos.Home.busqueda');
    }
    function postBuscar(){
        $buscar = filter_input(INPUT_POST, "buscar");
        $resultados = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "sit_nombre LIKE '%$buscar%' AND "
                . "bdp_imagen.sit_id=bdp_sitio.sit_id");
    	
        
        if (empty($resultados)){
            Session::flash("sinResultados", "No se encontraron resultados");
            return view('Modulos.Home.busqueda', compact("resultados"));
        }else{
            return view('Modulos.Home.busqueda', compact("resultados"));
        }
    }
    
}
