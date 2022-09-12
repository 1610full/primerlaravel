<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contactoCodigo($codigo = null){
        return view('contacto', compact('codigo'));
    }
    public function landingpage(){
        return view('landingpage');
    }
}
