<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class ItinerarioController extends Controller
{
    function getIndex(){
    	return view('Modulos.Itinerario.itinerario');
    }
    function getSitios(){
        $idUsuario = Session::get("usuarioId");
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_itinerario WHERE bdp_sitio.sit_id=bdp_itinerario.sit_id "
                . "AND bdp_itinerario.usu_id=$idUsuario");
    	return view('Modulos.Itinerario.sitios', compact("sitios"));
    }
    function getEventos(){
    	return view('Modulos.Itinerario.eventos');
    }
    
    function getSitio($id) {
        
        $idUsuario = Session::get("usuarioId");
               
        DB::insert("INSERT INTO bdp_itinerario (usu_id, sit_id) VALUES (?,?)",
                array($idUsuario, $id));
        
        Session::flash("sitio", "Se ha agregado exitosamente el sitio al itinerario");
        return redirect(url("itinerario"));
    }
}
