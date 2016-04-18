<?php

namespace Portal\Http\Controllers\Modulos\Seguridad;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SeguridadController extends Controller {

    function getLogin() {
        if ((Session::has("usuarioLogueado")) || (Session::has("usuarioAdmin"))){
            return view('Modulos.Home.index');
        } else {
            return view('Modulos.Seguridad.login');
        }
    }
    function getRegistro() {
        if ((Session::has("usuarioLogueado")) || (Session::has("usuarioAdmin"))){
            return view('Modulos.Home.index');
        } else {
        return view('Modulos.Seguridad.registro');
    }
    }
    function postRegistro() {

        //$registro = filter_input_array(INPUT_POST)['registro'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $nick = $_POST['nick'];
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password_confirmation'];
        $email = $_POST['email'];
        $fecha = $_POST['fecha'];
        $genero = $_POST['genero'];
        
        $reglas = array(
            "nombre"  => "required | max:40",
            "apellidos" => "required | max:60",
            "nick" => "required | max:20 | unique:bdp_usuario,usu_usuario",
            "password" => "required | confirmed" ,
            "email" => "required | email",
            "fecha" => "required | date",
            "genero" => "required",
        );
        
        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "apellidos.required" => "El campo 'apellidos' debe ser obligarorio",
            "apellidos.max" => "El campo 'apellidos' debe tener máximo 60 caracteres",
            "nick.required" => "El campo 'usuario' debe ser obligarorio",
            "nick.max" => "El campo 'usuario' debe tener máximo 20 caracteres",
            "nick.unique" => "El usuario: "."'".$nick."'"." ya existe en la base de datos",
            "password.required" => "El campo 'contraseña' debe ser obligarorio",
            "password.confirmed" => "Las contraseñas deben ser iguales",
            "email.required" => "El campo 'email' debe ser obligarorio",
            "email.email" => "El campo 'email' no contiene un correo válido",
            "fecha.required" => "El campo 'fecha de nacimiento' debe ser obligarorio",
            "fecha.date" => "El campo 'fecha de nacimiento' no contiene una fecha válida",
            "genero.required" => "El campo 'género' debe ser obligarorio",
        ];
        
    $validacion = Validator::make($_POST, $reglas, $mensajes);
        
        if($validacion->fails()){
           return redirect(url('seguridad/registro')) 
                   ->withErrors($validacion->errors());
        }

        $usuario = DB::insert('INSERT INTO bdp_usuario '
                        . '(usu_usuario, usu_password, usu_activado, rol_id) '
                        . 'VALUES (?,?,?,?)', array($nick, $pass1, 1, 2));

        $id = DB::select('SELECT IFNULL(MAX(usu_id),0) AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        DB::insert('INSERT INTO bdp_dato_usuario '
                . '(usu_id, dus_nombre, dus_apellidos, dus_correo, '
                . 'dus_genero, dus_fecha_nacimiento) '
                . 'VALUES (?,?,?,?,?,?)', array($id, $nombre, $apellidos,
            $email, $genero, $fecha));

        Session::flash("usuarioRegistrado", "Usuario Registrado Exitosamente");
        return redirect(url('seguridad/login'));
    }

    function postLogin() {
        if (filter_has_var(INPUT_POST, 'login') === true) {
            //$usuario = filter_input_array(INPUT_POST)['login'];
            $user = filter_input_array(INPUT_POST)['login']['user'];
            $password = filter_input_array(INPUT_POST)['login']['password'];

            $verificarUsuario = DB::select("SELECT bdp_usuario.usu_id, dus_genero FROM bdp_usuario, bdp_dato_usuario WHERE usu_deleted_at IS NULL "
                            . "AND usu_activado = '1' AND usu_usuario = ? AND "
                            . "usu_password = ? AND bdp_usuario.usu_id=bdp_dato_usuario.usu_id", array($user, $password));

//            $datosUsuario = DB::select("SELECT bdp_usuario.usu_id AS id, usu_usuario AS usuario, dus_nombre AS nombre, dus_apellidos AS apellidos FROM bdp_usuario "
//            . "INNER JOIN bdp_dato_usuario ON bdp_usuario.usu_id=bdp_dato_usuario.dus_id WHERE (bdp_usuario.usu_deleted_at "
//            . "IS NULL AND bdp_usuario.usu_activado = '1') AND bdp_dato_usuario.dus_deleted_at IS NULL "
//            . "AND (usu_usuario = ? AND usu_password = ?)", array($user, $password));

            //foreach ($verificarUsuario as $id) {
                if (empty($verificarUsuario[0])){
                    Session::flash("usuarioInvalido", "Datos de usuario inválidos");
                    return redirect('seguridad/login');
                }
                elseif ($verificarUsuario[0]->usu_id !== 1) {
                    Session::put("usuarioLogueado", $user);
                    Session::put("usuarioId", $verificarUsuario[0]->usu_id);
                    Session::put("usuarioGenero", $verificarUsuario[0]->dus_genero);
                    return redirect('home/index');
                } elseif ($verificarUsuario[0]->usu_id === 1) {
                    Session::put("usuarioAdmin", "Admin");
                    Session::put("usuarioGenero", $verificarUsuario[0]->dus_genero);
                    return redirect('home/index');
           // } 
            }
        }
    }

    function getLogout() {
        Session::forget("usuarioLogueado");
        Session::forget("usuarioId");
        Session::forget("usuarioGenero");
        Session::forget("usuarioAdmin");
        return redirect('home/index');
    }

}
