<?php

namespace App\Http\Controllers;

use App\Models\DirEmpresa;
use Illuminate\Http\Request;

class DirEmpresaController extends Controller
{

    public function index()
    {
        if (auth()->id()=='1') {
            $dempresas = DirEmpresa::all();
        } elseif (auth()->id()=='2'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. SISTEMAS COMPUTACIONALES'])->get();
        } elseif (auth()->id()=='3'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. INDUSTRIAL'])->get();
        } elseif (auth()->id()=='4'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. BIOQUIMICA'])->get();
        } elseif (auth()->id()=='5'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. ELECTROMECANICA'])->get();
        } elseif (auth()->id()=='6'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. ELECTRONICA'])->get();
        } elseif (auth()->id()=='7'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. INDUSTRIAS ALIMENTARIAS'])->get();
        } elseif (auth()->id()=='8'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. GASTRONOMIA'])->get();
        } elseif (auth()->id()=='9'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. CIVIL'])->get();
        } elseif (auth()->id()=='10'){
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. MECATRONICA'])->get();
        } else {
            $dempresas = DirEmpresa::select('*')->where('egresado_carrera',['ING. GESTION EMPRESARIAL'])->get();
        }
        //$dempresas = DirEmpresa::all();
        return View('directorioempresas.index',['dempresas' => $dempresas]);
    }

}
