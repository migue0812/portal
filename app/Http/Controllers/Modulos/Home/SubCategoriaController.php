<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

/**
 * Description of SubCategoriaController
 *
 * @author Ne_K Music
 */
class SubCategoriaController extends controller {

    function getRegistrar() {
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        return view('Modulos.SubCategoria.registrar', compact("categorias"));
    }
function postRegistrar(){
        
        $subCatNombre = $_POST["nombre"];
        $subCatCategoria = $_POST["categoria"];
        
        
        $reglas = array(
            "nombre" => "required | max:40 | unique:bdp_subcategoria,subcat_nombre",
            "categoria" => "required" ,
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre "."'".$subCatNombre."'"." ya existe en la base de datos",
            "categoria.required" => "El campo 'categoría' debe ser obligarorio",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('panelcontrol')) 
                   ->withErrors($validacion->errors());
        }
        
        DB::insert("INSERT INTO bdp_subcategoria (subcat_nombre, subcat_activo, cat_id) "
                . "VALUES (?,?,?)", array($subCatNombre, 1, $subCatCategoria,));
          
        Session::flash("registrar", "Registro Existoso");
        
        return redirect(url('panelcontrol'));
    }
    
     function getListar(){
         if (Session::has("usuarioAdmin")){
           $subcategorias = DB::select("SELECT * FROM bdp_subcategoria");
    	return view('Modulos.SubCategoria.listar', compact("subcategorias"));
        } else {
            return view('Modulos.Home.index');
        }	
    }
    
    function getEditar($id) {
        if (Session::has("usuarioAdmin")){
            $subcategorias = DB::select("SELECT * FROM bdp_subcategoria, bdp_categoria WHERE subcat_id = ? "
                . "AND bdp_subcategoria.cat_id=bdp_categoria.cat_id",
                array($id));
        $subcategorias = $subcategorias[0];
        
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        
        return view('Modulos.SubCategoria.editar', compact("subcategorias"), compact("categorias"));
        } else {
            return view('Modulos.Home.index');
        }	
    }
    
    function postEditar() {
        $categoria = filter_input_array(INPUT_POST)['categoria'];
        
        DB::update("UPDATE bdp_categoria SET cat_nombre = ?, cat_descripcion = ?, cat_updated_at = CURRENT_TIMESTAMP WHERE cat_id = ?",
                array($categoria["nombre"], $categoria["descripcion"], $categoria["id"]));
        Session::flash("editar", "Edición Exitosa");
        return redirect(url("panelcontrol"));
    }
    function getInhabilitar($id) {
                if (Session::has("usuarioAdmin")){
            DB::update("UPDATE bdp_subcategoria SET subcat_activo = 0, subcat_deleted_at = CURRENT_TIMESTAMP WHERE subcat_id = ?",
                array($id));
        Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
        return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }	
    }
    
    function getHabilitar($id) {
                if (Session::has("usuarioAdmin")){
            DB::update("UPDATE bdp_subcategoria SET subcat_activo = 1 WHERE subcat_id = ?",
                array($id));
        Session::flash("habilitar", "Se ha habilitado exitosamente");
        return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }	
    }
}
