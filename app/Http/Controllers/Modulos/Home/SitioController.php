<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Validator;

class SitioController extends Controller {

    function getIndex() {
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_imagen.sit_id = bdp_sitio.sit_id");
        return view('Modulos.Home.sitio', compact('sitios'));
    }

    function getDetalle($id) {
        
        $sitDetalle = DB::select("SELECT * FROM bdp_sitio WHERE sit_id = ?", array($id));
        $sitDetalle = $sitDetalle[0];
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_imagen.sit_id = bdp_sitio.sit_id");
        $visitas = DB::update("UPDATE bdp_sitio SET sit_visitas = ".(($sitDetalle->sit_visitas)+1)." WHERE sit_id = ?", array($id));
        return view('Modulos.Home.sitioDet', compact('sitDetalle'), compact("sitios"));
    }

    function getRegistrar() {
        if (Session::has("usuarioAdmin")) {
            $categorias = DB::select("SELECT * FROM bdp_categoria");
            $subcategorias = DB::select("SELECT * FROM bdp_Subcategoria");
            return view('Modulos.Sitio.registrar', compact("categorias"), compact("subcategorias"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function postRegistrar() {
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitSubCategoria = $_POST["subcategoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sitDescripcion = $_POST["descripcion"];

        $sitioImg = $_FILES["imagen"]["name"];
        $sitioRuta = $_FILES["imagen"]["tmp_name"];
        $sitioDest = "img/" . $sitioImg;
        copy($sitioRuta, $sitioDest);

        $reglas = array(
            "nombre" => "required | max:40 | unique:bdp_sitio,sit_nombre",
            "direccion" => "required | max:40",
            "telefono" => "required | integer | min:7",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "nombre.unique" => "El nombre " . "'" . $sitNombre . "'" . " ya existe en la base de datos",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
            "telefono.required" => "El campo 'teléfono' debe ser obligarorio",
            "telefono.min" => "El campo 'teléfono' debe tener minímo 7 caracteres",
            "telefono.integer" => "El campo 'teléfono' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('panelcontrol'))
                            ->withErrors($validacion->errors());
        }

        DB::insert("INSERT INTO bdp_sitio (sit_nombre, sit_descripcion, "
                . "cat_id, id_subcat, sit_direccion, sit_telefono, sit_latitud, sit_longitud,"
                . "est_id, usu_id) VALUES (?,?,?,?,?,?,?,?,?,?)", array($sitNombre,
            $sitDescripcion, $sitCategoria, $sitSubCategoria, $sitDireccion,
            $sitTelefono, 101010101010, 1100110011, 1, 1));

        $id = DB::select('SELECT IFNULL(MAX(sit_id),0) AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
        $id = $id[0]->id;

        DB::insert("INSERT INTO bdp_imagen (sit_id, img_ruta) VALUES (?,?)", array($id, $sitioDest));

        Session::flash("registrar", "Registro Exitoso");

        return redirect(url('panelcontrol'));
    }

    function getListar() {
        if (Session::has("usuarioAdmin")) {
            $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_estado WHERE bdp_sitio.est_id=bdp_estado.est_id");
            return view('Modulos.Sitio.listar', compact("sitios"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getEditar($id) {
        if (Session::has("usuarioAdmin")) {
            $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen, bdp_categoria WHERE bdp_sitio.sit_id = ? "
                            . "AND bdp_imagen.sit_id = bdp_sitio.sit_id AND bdp_sitio.cat_id=bdp_categoria.cat_id", array($id));
            $sitios = $sitios[0];
            $categorias = DB::select("SELECT * FROM bdp_categoria");

            return view('Modulos.Sitio.editar', compact("sitios"), compact("categorias"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function postEditar() {
        $sitNombre = $_POST["nombre"];
        $sitCategoria = $_POST["categoria"];
        $sitDireccion = $_POST["direccion"];
        $sitTelefono = $_POST["telefono"];
        $sitDescripcion = $_POST["descripcion"];
        $sitId = $_POST["id"];

        $reglas = array(
            "nombre" => "required | max:40",
            "direccion" => "required | max:40",
            "telefono" => "required | integer | min:7",
            "descripcion" => "required | min:30",
            "imagen" => "image"
        );

        $mensajes = [
            "nombre.required" => "El campo 'nombre' debe ser obligarorio",
            "nombre.max" => "El campo 'nombre' debe tener máximo 40 caracteres",
            "direccion.required" => "El campo 'dirección' debe ser obligarorio",
            "direccion.max" => "El campo 'dirección' debe tener máximo 40 caracteres",
            "telefono.required" => "El campo 'teléfono' debe ser obligarorio",
            "telefono.min" => "El campo 'teléfono' debe tener minímo 7 caracteres",
            "telefono.integer" => "El campo 'teléfono' debe ser un valor numérico",
            "descripcion.required" => "El campo 'descripción' debe ser obligarorio",
            "descripcion.min" => "El campo 'descripción' debe tener minímo 30 caracteres",
            "imagen.image" => "El campo 'imagen' debe contener una imagen",
        ];

        $validacion = Validator::make($_POST, $reglas, $mensajes);

        if ($validacion->fails()) {
            return redirect(url('panelcontrol'))
                            ->withErrors($validacion->errors());
        }

        DB::update("UPDATE bdp_sitio SET sit_nombre = ?, cat_id = ?, sit_direccion = ?, "
                . "sit_telefono = ?, sit_descripcion = ?, sit_updated_at = CURRENT_TIMESTAMP WHERE sit_id = ?", array($sitNombre, $sitCategoria, $sitDireccion,
            $sitTelefono, $sitDescripcion, $sitId));

        Session::flash("editar", "Edición Exitosa");
        return redirect(url("panelcontrol"));
    }

    function getInhabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_sitio SET est_id = 2, sit_deleted_at = CURRENT_TIMESTAMP WHERE sit_id = ?", array($id));

            Session::flash("inhabilitar", "Se ha inhabilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return redirect(url("home/index"));
        }
    }

    function getHabilitar($id) {
        if (Session::has("usuarioAdmin")) {
            DB::update("UPDATE bdp_sitio SET est_id = 1, sit_deleted_at = NULL WHERE sit_id = ?", array($id));

            Session::flash("habilitar", "Se ha inhabilitado exitosamente");
            return redirect(url("panelcontrol"));
        } else {
            return redirect(url("home/index"));
        }
    }

}
