<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class CategoriaController extends Controller
{
    function getIndex(){
        $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_imagen.cat_id = bdp_categoria.cat_id");
    	return view('Modulos.Home.categoria', compact("categorias"));
    }
    function getDetalle(){
    	return view('Modulos.Home.categoriaDet');
    }
    function getRegistrar(){
    	return view('Modulos.Categoria.registrar');
    }
    function postRegistrar(){
        
    	$categoria = filter_input_array(INPUT_POST)['categoria'];
        $categoriaImg = $_FILES["imagen"]["name"];
        $categoriaRuta = $_FILES["imagen"]["tmp_name"];
        $categoriaDest = "img/".$categoriaImg;
        copy($categoriaRuta, $categoriaDest);
        
        DB::insert("INSERT INTO bdp_categoria (cat_nombre, cat_descripcion, cat_activo, cat_created_at) "
                . "VALUES (?,?,?,?)", array($categoria["nombre"], $categoria["descripcion"], 1, "CURRENT_TIMESTAMP"));
        
        $id = DB::select('SELECT IFNULL(MAX(cat_id),0) AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        
        DB::insert("INSERT INTO bdp_imagen (cat_id, img_ruta) VALUES (?,?)",
                array ($id, $categoriaDest));
        
        return redirect(url('home/categoria/registrar'));
    }
    function getListar(){
        $categorias = DB::select("SELECT * FROM bdp_categoria");
    	return view('Modulos.Categoria.listar', compact("categorias"));
    }
    
     function getEditar($id) {
        $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_categoria.cat_id = ? "
                . "AND bdp_imagen.cat_id = bdp_categoria.cat_id",
                array($id));
        $categorias = $categorias[0];
        
        return view('Modulos.Categoria.editar', compact("categorias"));
    }
    
    function postEditar() {
        $categoria = filter_input_array(INPUT_POST)['categoria'];
        
        DB::update("UPDATE bdp_categoria SET cat_nombre = ?, cat_descripcion = ?, cat_updated_at = CURRENT_TIMESTAMP WHERE cat_id = ?",
                array($categoria["nombre"], $categoria["descripcion"], $categoria["id"]));
        return redirect(url("home/categoria/listar"));
    }
}
