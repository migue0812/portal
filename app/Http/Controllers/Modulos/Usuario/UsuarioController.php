<?php
namespace Portal\Http\Controllers\Modulos\Usuario;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

/**
 * Description of UsuarioController
 *
 * @author Miguel
 */
class UsuarioController extends Controller {

    function getListar() {
        if (Session::has("usuarioAdmin")) {
        $usuarios = DB::select("SELECT * FROM bdp_usuario WHERE usu_id != 1");
        return view('Modulos.Usuario.listar', compact("usuarios"));
    }else {
            return redirect(url("home/index"));
    }}

    function getEditar() {
        if (Session::has("usuarioLogueado")) {
        $idUsuario = Session::get("usuarioId");
        $usuario = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = ?",
                array($idUsuario));
        $usuario = $usuario[0];
        
        return view('Modulos.Usuario.editar', compact("usuario"));
    }else {
            return redirect(url("home/index"));
    }}

    function getVer($id) {
        if (Session::has("usuarioAdmin")) {
        $usuario = DB::select("SELECT * FROM bdp_usuario, bdp_dato_usuario WHERE bdp_usuario.usu_id = ? AND "
                . "bdp_usuario.usu_id=bdp_dato_usuario.usu_id", 
                array($id));
        $usuario = $usuario[0];
        return view('Modulos.Usuario.ver', compact("usuario"));
    }else {
            return redirect(url("home/index"));
    }}
    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_usuario SET usu_activado = 0, usu_deleted_at = CURRENT_TIMESTAMP WHERE usu_id = ?", array($id));
            Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return redirect(url("home/index"));
        }
    }
    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_usuario SET usu_activado = 1, usu_deleted_at = NULL WHERE usu_id = ?", array($id));
            Session::flash("habilitar", "Se ha habilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return redirect(url("home/index"));
        }
    }
    function postEditar() {

        $idUsuario = Session::get("usuarioId");     
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $fecha = $_POST['fecha'];
        $genero = $_POST['genero'];
        
        $reglas = array(
            "nombre"  => "required | max:40",
            "apellidos" => "required | max:60",
            "email" => "required | email",
            "fecha" => "required | date",
            "genero" => "required",
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "apellidos.required" => "El campo 'apellidos' debe ser obligarorio",
            "apellidos.max" => "El campo 'apellidos' debe tener máximo 60 caracteres",
            "email.required" => "El campo 'email' debe ser obligarorio",
            "email.email" => "El campo 'email' no contiene un correo válido",
            "fecha.required" => "El campo 'fecha de nacimiento' debe ser obligarorio",
            "fecha.date" => "El campo 'fecha de nacimiento' no contiene una fecha válida",
            "genero.required" => "El campo 'género' debe ser obligarorio",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('usuario/editar')) 
                   ->withErrors($validacion->errors());
        }

        DB::update('UPDATE bdp_dato_usuario SET '
                . 'dus_nombre = ?, dus_apellidos = ?, dus_correo = ?, '
                . 'dus_genero = ?, dus_fecha_nacimiento = ?, dus_updated_at = CURRENT_TIMESTAMP WHERE usu_id = ?', 
                array($nombre, $apellidos,
            $email, $genero, $fecha, $idUsuario));

        Session::flash("usuarioEditado", "Se han editado los datos exitosamente");
        return redirect(url('usuario/editar'));
    }
    }
