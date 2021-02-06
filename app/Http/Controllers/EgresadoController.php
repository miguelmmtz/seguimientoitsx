<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EgresadoController extends Controller
{
    public function index()
    {
        if (auth()->id()=='1') {
            $egresados = DB::table('seccion1_egresado')->get();
        } elseif (auth()->id()=='2'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. SISTEMAS COMPUTACIONALES'])->get();
        } elseif (auth()->id()=='3'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. INDUSTRIAL'])->get();
        } elseif (auth()->id()=='4'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. BIOQUIMICA'])->get();
        } elseif (auth()->id()=='5'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. ELECTROMECANICA'])->get();
        } elseif (auth()->id()=='6'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. ELECTRONICA'])->get();
        } elseif (auth()->id()=='7'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. INDUSTRIAS ALIMENTARIAS'])->get();
        } elseif (auth()->id()=='8'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. GASTRONOMIA'])->get();
        } elseif (auth()->id()=='9'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. CIVIL'])->get();
        } elseif (auth()->id()=='10'){
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. MECATRONICA'])->get();
        } else {
            $egresados = DB::table('seccion1_egresado')->select('*')->where('carrera',['ING. GESTION EMPRESARIAL'])->get();
        }

        //$egresados = DB::table('seccion1_egresado')->get();
        return View('egresados.index',['egresados' => $egresados]);
    }
}
