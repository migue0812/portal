<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    function getIndex(){
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE "
                . "bdp_imagen.sit_id = bdp_sitio.sit_id order by sit_visitas DESC "
                . "LIMIT 0, 5");
    	return view('Modulos.Home.index', compact("sitios"));
    }
}
