<?php

namespace Portal\Http\Controllers\Modulos\Seguridad;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class SeguridadController extends Controller {

    function getLogin() {
        return view('Modulos.Seguridad.login');
    }

    function getRegistro() {
        return view('Modulos.Seguridad.registro');
    }

    function postRegistro() {

        $registro = filter_input_array(INPUT_POST)['registro'];

        $usuario = DB::insert('INSERT INTO bdp_usuario '
                . '(usu_usuario, usu_password, usu_activado, rol_id) '
                . 'VALUES (?,?,?,?)', array($registro['nick'], $registro['password'], 1, 2));

        $id = DB::select('SELECT IFNULL(MAX(usu_id),0) AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;
        DB::insert('INSERT INTO bdp_dato_usuario '
                . '(usu_id, dus_nombre, dus_apellidos, dus_correo, '
                . 'dus_genero, dus_fecha_nacimiento) '
                . 'VALUES (?,?,?,?,?,?)', array($id, $registro['nombre'], $registro['apellidos'],
            $registro['email'], $registro['genero'], $registro['fecha']));
        
        Session::flash("usuarioRegistrado", "Usuario Registrado Exitosamente");
        return redirect(url('seguridad/login'));
    }

    function postLogin() {
        if (filter_has_var(INPUT_POST, 'login') === true) {
            //$usuario = filter_input_array(INPUT_POST)['login'];
            $user = filter_input_array(INPUT_POST)['login']['user'];
            $password = filter_input_array(INPUT_POST)['login']['password'];

            $verificarUsuario = DB::select("SELECT usu_id FROM bdp_usuario WHERE usu_deleted_at IS NULL "
                            . "AND usu_activado = '1' AND usu_usuario = ? AND "
                            . "usu_password = ?", array($user, $password));

           
            if($verificarUsuario[0]->usu_id === 1){
              Session::put("usuarioAdmin", $user);
              return redirect('home/index');  
            }  elseif ($verificarUsuario[0]->usu_id !== 1) {
                Session::put("usuarioLogueado", $user);
                return redirect('home/index');
        }}else {
        Session::flash("usuarioInvalido", "Datos de usuario inválidos");
                return redirect('seguridad/login');

            } 
            }         
        
        function getLogout() {
        Session::forget("usuarioLogueado");
         return view('Modulos.Home.index');
}
    }