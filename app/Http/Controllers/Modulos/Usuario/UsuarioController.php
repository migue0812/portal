<?php
namespace Portal\Http\Controllers\Modulos\Usuario;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Portal\User;

/**
 * Description of UsuarioController
 *
 * @author Miguel
 */
class UsuarioController extends Controller {

    function getListar() {
        $usuarios = DB::select("SELECT * FROM usuario");
        return view('Modulos.Usuario.listar', compact("usuarios"));
    }
    function getCrear() {
        return view('Modulos.Usuario.crear');
    }
    function postCrear() {
        $nombre =$_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        
        DB::insert("INSERT INTO usuario (nombre, apellidos) VALUES(?,?)",
                array($nombre, $apellidos));
        return redirect(url("usuario/listar"));
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
    function getEliminar($id ) {
DB::delete("DELETE FROM usuario WHERE id = ?", array($id));
return redirect(url("usuario/listar"));
        
    }
    }
