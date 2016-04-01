<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;

class BusquedaController extends Controller
{
    function getIndex(){
    	return view('Modulos.Home.busqueda');
    }
    
}
