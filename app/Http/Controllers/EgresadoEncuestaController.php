<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EgresadoEncuestaController extends Controller
{
    public function index(){
        return view('egresadoencuesta.encuesta');
    }
}
