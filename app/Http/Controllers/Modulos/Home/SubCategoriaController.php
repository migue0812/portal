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

}
