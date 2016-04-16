<?php
namespace Portal\Http\Controllers\Modulos\Usuario;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

/**
 * Description of UsuarioController
 *
 * @author Miguel
 */
class UsuarioController extends Controller {

    function getListar() {
        $usuarios = DB::select("SELECT * FROM bdp_usuario WHERE usu_id != 1");
        return view('Modulos.Usuario.listar', compact("usuarios"));
    }

    function getEditar($id) {
        $usuario = DB::select("SELECT * FROM usuario WHERE id = ?",
                array($id));
        $usuario = $usuario[0];
        
        return view('Modulos.Usuario.editar', compact("usuario"));
    }
    function postEditar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        
        DB::update("UPDATE usuario SET nombre = ?, apellidos = ? WHERE id = ?",
                array($nombre, $apellidos, $id));
        return redirect(url("usuario/listar"));
    }

    function getVer($id) {
        
        $usuario = DB::select("SELECT * FROM bdp_usuario, bdp_dato_usuario WHERE bdp_usuario.usu_id = ? AND "
                . "bdp_usuario.usu_id=bdp_dato_usuario.usu_id", 
                array($id));
        $usuario = $usuario[0];
        return view('Modulos.Usuario.ver', compact("usuario"));
    }
    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_usuario SET usu_activado = 0, usu_deleted_at = CURRENT_TIMESTAMP WHERE usu_id = ?", array($id));
            Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }
    }
    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_usuario SET usu_activado = 1, usu_deleted_at = NULL WHERE usu_id = ?", array($id));
            Session::flash("habilitar", "Se ha habilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }
    }
    }
