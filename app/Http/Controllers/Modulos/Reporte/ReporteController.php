<?php

namespace Portal\Http\Controllers\Modulos\Reporte;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class ReporteController extends Controller
{
    function getUsuario(){
        $usuarios = DB::select("SELECT * FROM bdp_usuario, bdp_dato_usuario "
                . "WHERE bdp_usuario.usu_id != 1 AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id");
    	return view('Modulos.Reporte.usuario', compact("usuarios"));
    }
}
