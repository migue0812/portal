<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class EventoController extends Controller
{
    function getIndex(){
        $eventos = DB::select("SELECT * FROM bdp_evento");
    	return view('Modulos.Home.evento', compact('eventos'));
    }
    
    function getDetalle(){
    	return view('Modulos.Home.eventoDet');
    }
    
    function postRegistrar(){
        //$sitio = filter_input_array(INPUT_POST)['sitio'];
        $eveNombre = $_POST["nombre"];
        $eveCategoria = $_POST["categoria"];
        $eveDireccion = $_POST["direccion"];
        $eveTelefono = $_POST["telefono"];
        $eveDescripcion = $_POST["descripcion"];
        
        $sitioImg = $_FILES["imagen"]["name"];
        $sitioRuta = $_FILES["imagen"]["tmp_name"];
        $sitioDest = "img/".$sitioImg;
        copy($sitioRuta, $sitioDest);
        
        $reglas = array(
            "nombre"  => "required | max:40 | unique:bdp_evento,eve_nombre",
            "direccion" => "required | max:20",
            "telefono" => "required | integer | min:7",
            "descripcion" => "required | min:30" ,
            "imagen" => "image"
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre "."'".$eveNombre."'"." ya existe en la base de datos",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 20 caracteres",
            "telefono.required" => "El campo 'teléfono' debe ser obligarorio",
            "telefono.min" => "El campo 'teléfono' debe tener minímo 7 caracteres",
            "telefono.int" => "El campo 'teléfono' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('panelcontrol')) 
                   ->withErrors($validacion->errors());
        }
        
        DB::insert("INSERT INTO bdp_sitio (sit_nombre, sit_descripcion, "
                . "cat_id, sit_direccion, sit_telefono, sit_latitud, sit_longitud,"
                . "est_id, usu_id) VALUES (?,?,?,?,?,?,?,?,?)", array($sitNombre,
                    $sitDescripcion, $sitCategoria, $sitDireccion, 
                    $sitTelefono, 101010101010, 1100110011, 1, 1));
        
        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        
        DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)",
                array ($id, $sitioDest));
        
        Session::flash("registrar", "Registro Exitoso");
        
        return redirect(url('panelcontrol'));
}
}
