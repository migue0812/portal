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
        if (Session::has("usuarioLogueado")){
    	return view('Modulos.Itinerario.itinerario');
    } else {
            return view('Modulos.Home.index');
        }
    }
    function getSitios(){
        if (Session::has("usuarioLogueado")){
        $idUsuario = Session::get("usuarioId");
        
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_itinerario WHERE bdp_sitio.sit_id=bdp_itinerario.sit_id "
                . "AND bdp_itinerario.usu_id=$idUsuario");
    	return view('Modulos.Itinerario.sitios', compact("sitios"));
    } else {
            return view('Modulos.Home.index');
        }
    }
    function getEventos(){
        if (Session::has("usuarioLogueado")){
    	return view('Modulos.Itinerario.eventos');
    }else {
            return view('Modulos.Home.index');
        }
    }
    
    function getSitio($id) {
        
        $idUsuario = Session::get("usuarioId");
        $verificar = DB::select("SELECT * FROM bdp_itinerario WHERE sit_id=? AND usu_id=?", 
                array($id, $idUsuario));
        if($verificar){
           Session::flash("sitioExistente", "Ya existe este sitio en el itinerario"); 
           return redirect(url("itinerario")); 
        }  else {
         DB::insert("INSERT INTO bdp_itinerario (usu_id, sit_id, iti_visitado) VALUES (?,?,?)",
                array($idUsuario, $id, 'No'));
        
        Session::flash("sitio", "Se ha agregado exitosamente el sitio al itinerario");
        return redirect(url("itinerario"));   
        }
               
        
    }
}
