<?php

namespace Portal\Http\Controllers\Modulos\Reporte;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class ReporteController extends Controller
{
    function getUsuario(){
        if (Session::has("usuarioAdmin")) {
        $usuarios = DB::select("SELECT * FROM bdp_usuario, bdp_dato_usuario "
                . "WHERE bdp_usuario.usu_id != 1 AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id");
    	return view('Modulos.Reporte.usuario', compact("usuarios"));
    }else {
            return redirect(url("home/index"));
    }}
    
    function getMasvisitados(){
        if (Session::has("usuarioAdmin")) {
    
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "bdp_imagen.sit_id = bdp_sitio.sit_id order by sit_visitas DESC "
                . "LIMIT 0, 9");
    	return view('Modulos.Reporte.masVisitados', compact("sitios"));
    }else {
            return redirect(url("home/index"));
    }}
}
