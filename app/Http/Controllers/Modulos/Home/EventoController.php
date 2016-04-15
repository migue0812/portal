<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EventoController extends Controller
{
    function getIndex(){
        $eventos = DB::select("SELECT * FROM bdp_evento");
    	return view('Modulos.Home.evento', compact('eventos'));
    }
    
    function getDetalle(){
    	return view('Modulos.Home.eventoDet');
    }
    function getRegistrar(){
        if (Session::has("usuarioAdmin")){
            $categorias = DB::select("SELECT * FROM bdp_categoria");
    	return view('Modulos.Evento.registrar', compact("categorias"));
        } else {
            return view('Modulos.Home.index');
        }
    }
    
    function postRegistrar(){
        //$sitio = filter_input_array(INPUT_POST)['sitio'];
        $eveNombre = $_POST["nombre"];
        $eveCategoria = $_POST["categoria"];
        $eveDireccion = $_POST["direccion"];
        $eveFechaHora = $_POST["fechaHora"];
        $eveConNombre = $_POST["nombreContacto"];
        $eveConTelefono = $_POST["telefonoContacto"];
        $eveConEmail = $_POST["emailContacto"];
        $eveBoleta = $_POST["boleta"];
        $eveDescripcion = $_POST["descripcion"];
        
        $eveImg = $_FILES["imagen"]["name"];
        $eveRuta = $_FILES["imagen"]["tmp_name"];
        $eveDest = "img/".$eveImg;
        copy($eveRuta, $eveDest);
        
        $reglas = array(
            "nombre"  => "required | max:40 | unique:bdp_evento,eve_nombre",
            "direccion" => "required | max:30",
            "fechaHora" => "required",
            "nombreContacto"  => "required | max:60",
            "telefonoContacto" => "required | numeric | min:7",
            "emailContacto" => "required | email",
            "boleta" => "required | numeric",
            "descripcion" => "required | min:30" ,
            "imagen" => "image"
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre "."'".$eveNombre."'"." ya existe en la base de datos",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 30 caracteres",
            "fechaHora.required" => "El campo 'fecha y hora' debe ser obligarorio",
            "nombreContacto.required" => "El campo 'nombre contacto' debe ser obligarorio",
            "nombreContacto.max" => "El campo 'nombre contacto' debe tener máximo 60 caracteres",
            "telefonoContacto.required" => "El campo 'teléfono contacto' debe ser obligarorio",
            "telefonoContacto.min" => "El campo 'teléfono contacto' debe tener minímo 7 caracteres",
            "telefonoContacto.numeric" => "El campo 'teléfono contacto' debe ser un valor numérico",
            "emailContacto.required" => "El campo 'email contacto' debe ser obligarorio",
            "emailContacto.email" => "El campo 'email contacto' no contiene un correo válido",
            "boleta.required" => "El campo 'boleta' debe ser obligarorio",
            "boleta.numeric" => "El campo 'boleta' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('panelcontrol')) 
                   ->withErrors($validacion->errors());
        }
        
        DB::insert("INSERT INTO bdp_evento (usu_id, cat_id, eve_nombre, eve_fecha_hora, "
                . "eve_direccion, eve_nombre_contacto, eve_correo_contacto, eve_telefono_contacto, "
                . "eve_valor_boleta, eve_latitud, eve_longitud, eve_descripcion, "
                . "est_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", array(1, $eveCategoria, 
                    $eveNombre, $eveFechaHora, $eveDireccion, $eveConNombre, $eveConEmail, 
                    $eveConTelefono, $eveBoleta, 101010101010, 1100110011, $eveDescripcion, 1));
        
        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        
        DB::insert("INSERT INTO bdp_imagen (eve_id, img_ruta) VALUES (?,?)",
                array ($id, $eveDest));
        
        Session::flash("registrar", "Registro Exitoso");
        
        return redirect(url('panelcontrol'));
}

   function getListar(){
                if (Session::has("usuarioAdmin")){
            $eventos = DB::select("SELECT * FROM bdp_evento, bdp_estado WHERE bdp_evento.est_id=bdp_estado.est_id");
    	return view('Modulos.Evento.listar', compact("eventos"));
        } else {
            return view('Modulos.Home.index');
        }  	
    }
    
    function getEditar($id) {
        if (Session::has("usuarioAdmin")){
            $eventos = DB::select("SELECT * FROM bdp_evento, bdp_imagen, bdp_categoria WHERE bdp_evento.eve_id = ? "
                . "AND bdp_imagen.eve_id = bdp_evento.eve_id AND bdp_evento.cat_id=bdp_categoria.cat_id",
                array($id));
        $eventos = $eventos[0];
        $categorias = DB::select("SELECT * FROM bdp_categoria");
                      
        return view('Modulos.Evento.editar', compact("eventos"), compact("categorias"));
        } else {
            return view('Modulos.Home.index');
        }	
    }
    
    function postEditar(){
        
        $eveNombre = $_POST["nombre"];
        $eveCategoria = $_POST["categoria"];
        $eveDireccion = $_POST["direccion"];
        $eveFechaHora = $_POST["fechaHora"];
        $eveConNombre = $_POST["nombreContacto"];
        $eveConTelefono = $_POST["telefonoContacto"];
        $eveConEmail = $_POST["emailContacto"];
        $eveBoleta = $_POST["boleta"];
        $eveDescripcion = $_POST["descripcion"];
             
        $reglas = array(
            "nombre"  => "required | max:40",
            "direccion" => "required | max:30",
            "fechaHora" => "required",
            "nombreContacto"  => "required | max:60",
            "telefonoContacto" => "required | numeric | min:7",
            "emailContacto" => "required | email",
            "boleta" => "required | numeric",
            "descripcion" => "required | min:30" ,
            "imagen" => "image"
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 30 caracteres",
            "fechaHora.required" => "El campo 'fecha y hora' debe ser obligarorio",
            "nombreContacto.required" => "El campo 'nombre contacto' debe ser obligarorio",
            "nombreContacto.max" => "El campo 'nombre contacto' debe tener máximo 60 caracteres",
            "telefonoContacto.required" => "El campo 'teléfono contacto' debe ser obligarorio",
            "telefonoContacto.min" => "El campo 'teléfono contacto' debe tener minímo 7 caracteres",
            "telefonoContacto.numeric" => "El campo 'teléfono contacto' debe ser un valor numérico",
            "emailContacto.required" => "El campo 'email contacto' debe ser obligarorio",
            "emailContacto.email" => "El campo 'email contacto' no contiene un correo válido",
            "boleta.required" => "El campo 'boleta' debe ser obligarorio",
            "boleta.numeric" => "El campo 'boleta' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('panelcontrol')) 
                   ->withErrors($validacion->errors());
        }
        
        DB::insert("UPDATE bdp_evento SET cat_id = ?, eve_nombre = ?, eve_fecha_hora = ?, "
                . "eve_direccion = ?, eve_nombre_contacto = ?, eve_correo_contacto = ?, eve_telefono_contacto = ?, "
                . "eve_valor_boleta = ?, eve_descripcion = ?", array($eveCategoria, 
                    $eveNombre, $eveFechaHora, $eveDireccion, $eveConNombre, $eveConEmail, 
                    $eveConTelefono, $eveBoleta, $eveDescripcion));
               
        Session::flash("editar", "Edición Exitosa");
        
        return redirect(url('panelcontrol'));
}

function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")){
            DB::update("UPDATE bdp_evento SET est_id = 2, eve_deleted_at = CURRENT_TIMESTAMP WHERE eve_id = ?",
                array($id));
        
        Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
        return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }  	
    }     
    function getHabilitar($id) {
               if (Session::has("usuarioAdmin")){
             DB::update("UPDATE bdp_evento SET est_id = 1 WHERE eve_id = ?",
                array($id));
        
        Session::flash("habilitar", "Se ha inhabilitado exitosamente");
        return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        } 	
    }
}
