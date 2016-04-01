<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;
use DB;

class EventoController extends Controller
{
    function getIndex(){
        $eventos = DB::select("SELECT * FROM bdp_evento");
    	return view('Modulos.Home.evento', compact('eventos'));
    }
    
    function getDetalle(){
    	return view('Modulos.Home.eventoDet');
    }
}
