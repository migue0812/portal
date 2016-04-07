<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;

use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;

class ItinerarioController extends Controller
{
    function getIndex(){
    	return view('Modulos.Itinerario.itinerario');
    }
    function getSitios(){
    	return view('Modulos.Itinerario.sitios');
    }
    function getEventos(){
    	return view('Modulos.Itinerario.eventos');
    }
}
