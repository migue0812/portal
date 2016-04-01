<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class SitioController extends Controller
{
    function getIndex(){
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_imagen.sit_id = bdp_sitio.sit_id");
    	return view('Modulos.Home.sitio', compact('sitios'));
            }
    function getDetalle($id){
        $sitDetalle = DB::select("SELECT * FROM bdp_sitio WHERE sit_id = ?",
                array($id));
        $sitDetalle = $sitDetalle[0];
    	return view('Modulos.Home.sitioDet', compact('sitDetalle'));
    }
    function getRegistrar(){
    	return view('Modulos.Sitio.registrar');
            }
    function postRegistrar(){
        $sitio = filter_input_array(INPUT_POST)['sitio'];
        
        $sitioImg = $_FILES["imagen"]["name"];
        $sitioRuta = $_FILES["imagen"]["tmp_name"];
        $sitioDest = "img/".$sitioImg;
        copy($sitioRuta, $sitioDest);
        
        DB::insert("INSERT INTO bdp_sitio (sit_nombre, sit_descripcion, "
                . "cat_id, sit_direccion, sit_telefono, sit_latitud, sit_longitud,"
                . "est_id, usu_id) VALUES (?,?,?,?,?,?,?,?,?)", array($sitio["nombre"],
                    $sitio["descripcion"], $sitio["categoria"], $sitio["direccion"], 
                    $sitio["telefono"], 101010101010, 1100110011, 1, 1));
        
        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        
        DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)",
                array ($id, $sitioDest));
        
        return redirect(url('home/sitio/registrar'));
    	
            }
            function getListar(){
        $sitios = DB::select("SELECT * FROM bdp_sitio");
    	return view('Modulos.Sitio.listar', compact("sitios"));
    }
    
    function getEditar($id) {
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_sitio.sit_id = ? "
                . "AND bdp_imagen.sit_id = bdp_sitio.sit_id",
                array($id));
        $sitios = $sitios[0];
        
        return view('Modulos.Sitio.editar', compact("sitios"));
}

 function postEditar() {
        $sitio = filter_input_array(INPUT_POST)['sitio'];
        
        DB::update("UPDATE bdp_sitio SET sit_nombre = ?, cat_id = ?, sit_direccion = ?, "
                . "sit_telefono = ?, sit_descripcion = ?, sit_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ?",
                array($sitio["nombre"], $sitio["categoria"], $sitio["direccion"], 
                    $sitio["telefono"], $sitio["descripcion"], $sitio["id"]));
        return redirect(url("home/sitio/listar"));
    }
}