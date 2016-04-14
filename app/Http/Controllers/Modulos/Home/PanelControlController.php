<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PanelControlController extends Controller
{
    function getIndex(){
        if (Session::has("usuarioAdmin")){
            return view('Modulos.PanelControl.index');
        } else {
            return view('Modulos.Home.index');
        }
    	
    }
}
