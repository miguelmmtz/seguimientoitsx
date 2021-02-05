<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EgresadoEncuestaController extends Controller
{
    public function index(){
        return view('egresadoencuesta.encuesta');
    }
    public function create()
    {
        return view('egresadoencuesta.create');
    }

    public function store(Request $request)
    {
        DB::table('seccion1_egresado')->insert([
            'matricula'=> request('I-1'),
            'nombre'=> request('I-2'),
            'fechaNac'=> request('I-3'),
            'curp'=> request('I-4'),
            'sexo'=> request('I-5'),
            'edoCivil'=> request('I-6'),
            'domicilio'=> request('I-7'),
            'ciudad'=> request('I-8'),
            'municipio'=> request('I-9'),
            'estado'=> request('I-10'),
            'telefono'=> request('I-11'),
            'email'=> request('I-12'),
            'telPaterno'=> request('I-13'),
            'carrera'=> request('I-14'),
            'especialidad'=> request('I-15'),
            'mesEgreso'=> request('I-16'),
            'anioEgreso'=> request('I-17'),
            'titulado'=> request('I-18'),
            'idiomaIngles'=> request('I-19'),
            'idiomaOtro'=> request('I-20'),
            'paquetesComp'=> request('I-21')
        ]);
        DB::table('seccion2')->insert([
            'id_egresado'=>request('I-1'),
            'II-1'=>request('II-1'),
            'II-2'=>request('II-2'),
            'II-3'=>request('II-3'),
            'II-4'=>request('II-4'),
            'II-5'=>request('II-5'),
            'II-6'=>request('II-6'),
            'II-7'=>request('II-7')
        ]);

        DB::table('seccion3')->insert([
            'id_egresado'=>request('I-1'),
            'III-1-1'=>request('III-1-1'),
            'III-1-2'=>request('III-1-2'),
            'III-1-3'=>request('III-1-3'),
            'III-2'=>request('III-2'),
            'III-3'=>request('III-3'),
            'III-4'=>request('III-4'),
            'III-6-1'=>request('III-6-1'),
            'III-6-2'=>request('III-6-2'),
            'III-6-3'=>request('III-6-3'),
            'III-6-4'=>request('III-6-4'),
            'III-7-1'=>request('III-7-1'),
            'III-7-2'=>request('III-7-2'),
            'III-8'=>request('III-8'),
            'III-9'=>request('III-9'),
            'III-10'=>request('III-10'),
            'III-11'=>request('III-11'),
            'III-12-1'=>request('III-12-1'),
            'III-12-2'=>request('III-12-2'),
            'III-12-3'=>request('III-12-3'),
            'III-12-4'=>request('III-12-4'),
            'III-12-5'=>request('III-12-5'),
            'III-12-6'=>request('III-12-6'),
            'III-12-7'=>request('III-12-7'),
            'III-12-8'=>request('III-12-8'),
            'III-12-9'=>request('III-12-9'),
            'III-12-10'=>request('III-12-10'),
            'III-12-11'=>request('III-12-11'),
            'III-13'=>request('III-13'),
            'III-14'=>request('III-14')
        ]);
        DB::table('seccion4')->insert([
            'id_egresado'=>request('I-1'),
            'IV-1'=>request('IV-1'),
            'IV-2'=>request('IV-2'),
            'IV-3'=>request('IV-3'),
            'IV-4-1'=>request('IV-4-1'),
            'IV-4-2'=>request('IV-4-2'),
            'IV-4-3'=>request('IV-4-3'),
            'IV-4-4'=>request('IV-4-4'),
            'IV-4-5'=>request('IV-4-5'),
            'IV-4-6'=>request('IV-4-6'),
            'IV-4-7'=>request('IV-4-7'),
            'IV-4-8'=>request('IV-4-8'),
            'IV-4-9'=>request('IV-4-9'),
            'IV-4-10'=>request('IV-4-10')
        ]);
        DB::table('seccion5')->insert([
            'id_egresado'=>request('I-1'),
            'V-1-1'=>request('V-1-1'),
            'V-1-2'=>request('V-1-2')
        ]);
        DB::table('seccion6')->insert([
            'id_egresado'=>request('I-1'),
            'VI-1'=>request('VI-1'),
            'VI-2'=>request('VI-2'),
            'VI-3'=>request('VI-3')
        ]);
        DB::table('seccion7')->insert([
            'id_egresado'=>request('I-1'),
            'VII-1'=>request('VII-1')
        ]);
        DB::table('dir_empresas')->insert([
            'nombreEmpresa'=>request('III-12-3'),
            'nombreJefe'=>request('III-12-10'),
            'email'=>request('III-12-11'),
            'egresado_carrera'=>request('I-14')
        ]);

        return redirect('/diregresados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
