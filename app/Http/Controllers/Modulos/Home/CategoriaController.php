<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CategoriaController extends Controller {

    function getIndex() {
        $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_imagen.cat_id = bdp_categoria.cat_id");
        return view('Modulos.Home.categoria', compact("categorias"));
    }

    function getDetalle($id) {
        $catDetalle = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_categoria.cat_id = ? AND bdp_imagen.cat_id = ? AND bdp_imagen.cat_id = bdp_categoria.cat_id", array($id, $id));
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen, bdp_categoria WHERE bdp_sitio.cat_id = ? AND bdp_categoria.cat_id = ? AND bdp_sitio.cat_id = bdp_categoria.cat_id AND bdp_imagen.sit_id = bdp_sitio.sit_id", array($id, $id));
        $catDetalle = $catDetalle[0];
        return view('Modulos.Home.categoriaDet', compact("catDetalle"), compact("sitios"));
    }

    function getRegistrar() {
        if (Session::has("usuarioAdmin")) {
            return view('Modulos.Categoria.registrar');
        } else {
            return view('Modulos.Home.index');
        }
    }

    function postRegistrar() {

        $catNombre = $_POST["nombre"];
        $catDescripcion = $_POST["descripcion"];
        $categoriaImg = $_FILES["imagen"]["name"];
        $categoriaRuta = $_FILES["imagen"]["tmp_name"];
        $categoriaDest = "img/" . $categoriaImg;
        copy($categoriaRuta, $categoriaDest);

        $reglas = array(
            "nombre" => "required | max:30 | unique:bdp_categoria,cat_nombre",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 30 caracteres",
            "nombre.unique" => "El nombre " . "'" . $catNombre . "'" . " ya existe en la base de datos",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener mínimo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('panelcontrol'))
                            ->withErrors($validacion->errors());
        }

        DB::insert("INSERT INTO bdp_categoria (cat_nombre, cat_descripcion, cat_activo) "
                . "VALUES (?,?,?)", array($catNombre, $catDescripcion, 1,));

        $id = DB::select('SELECT IFNULL(MAX(cat_id),0) AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        DB::insert("INSERT INTO bdp_imagen (cat_id, img_ruta) VALUES (?,?)", array($id, $categoriaDest));

        Session::flash("registrar", "Registro Existoso");

        return redirect(url('panelcontrol'));
    }

    function getListar() {
        if (Session::has("usuarioAdmin")) {
            $categorias = DB::select("SELECT * FROM bdp_categoria");
            return view('Modulos.Categoria.listar', compact("categorias"));
        } else {
            return view('Modulos.Home.index');
        }
    }

    function getEditar($id) {
        if (Session::has("usuarioAdmin")) {
            $categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_categoria.cat_id = ? "
                            . "AND bdp_imagen.cat_id = bdp_categoria.cat_id", array($id));
            $categorias = $categorias[0];

            return view('Modulos.Categoria.editar', compact("categorias"));
        } else {
            return view('Modulos.Home.index');
        }
    }

    function postEditar() {
        $catNombre = $_POST["nombre"];
        $catDescripcion = $_POST["descripcion"];
        $catId = $_POST["id"];
        
        $reglas = array(
            "nombre" => "required | max:30",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 30 caracteres",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener mínimo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('panelcontrol'))
                            ->withErrors($validacion->errors());
        }

        DB::update("UPDATE bdp_categoria SET cat_nombre = ?, cat_descripcion = ?, cat_updated_at = CURRENT_TIMESTAMP WHERE cat_id = ?", 
                array($catNombre, $catDescripcion, $catId));
        Session::flash("editar", "Edición Exitosa");
        return redirect(url("panelcontrol"));
    }

    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_categoria SET cat_activo = 0, cat_deleted_at = CURRENT_TIMESTAMP WHERE cat_id = ?", array($id));
            Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }
    }

    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_categoria SET cat_activo = 1 WHERE cat_id = ?", array($id));
            Session::flash("habilitar", "Se ha habilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return view('Modulos.Home.index');
        }
    }

}
