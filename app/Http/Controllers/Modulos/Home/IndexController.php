<?php

namespace Portal\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use Portal\Http\Requests;
use Portal\Http\Controllers\Controller;

class IndexController extends Controller
{
    function getIndex(){
    	return view('Modulos.Home.index');
    }
}
