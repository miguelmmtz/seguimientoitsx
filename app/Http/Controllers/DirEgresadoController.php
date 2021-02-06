<?php

namespace App\Http\Controllers;

use App\Http\Requests\DirEgresadoFormRequest;
use App\Models\DirEgresado;
use Illuminate\Http\Request;

class DirEgresadoController extends Controller
{

    public function index()
    {
        if (auth()->id()=='1') {
            $degresados = DirEgresado::all();
        } elseif (auth()->id()=='2'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. SISTEMAS COMPUTACIONALES'])->get();
        } elseif (auth()->id()=='3'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. INDUSTRIAL'])->get();
        } elseif (auth()->id()=='4'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. BIOQUIMICA'])->get();
        } elseif (auth()->id()=='5'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. ELECTROMECANICA'])->get();
        } elseif (auth()->id()=='6'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. ELECTRONICA'])->get();
        } elseif (auth()->id()=='7'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. INDUSTRIAS ALIMENTARIAS'])->get();
        } elseif (auth()->id()=='8'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. GASTRONOMIA'])->get();
        } elseif (auth()->id()=='9'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. CIVIL'])->get();
        } elseif (auth()->id()=='10'){
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. MECATRONICA'])->get();
        } else {
            $degresados = DirEgresado::select('id','matricula','email','carrera')->where('carrera',['ING. GESTION EMPRESARIAL'])->get();
        }
        return View('directorioegresados.index', ['degresados' => $degresados]);
    }

    public function create()
    {
        return view('directorioegresados.create');
    }

    public function store(DirEgresadoFormRequest $request)
    {
        $dirEgresado = new DirEgresado();

        $dirEgresado->matricula = request('matricula');
        $dirEgresado->email = request('email');
        $dirEgresado->carrera = request('carrera');

        $dirEgresado->save();

        return redirect('/diregresados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('directorioegresados.edit', ['degresado'=>DirEgresado::findOrFail($id)]);
    }

    public function update(DirEgresadoFormRequest $request, $id)
    {
        $dirEgresado = DirEgresado::findOrFail($id);

        $dirEgresado->matricula = $request->get('matricula');
        $dirEgresado->email = $request->get('email');
        $dirEgresado->carrera = $request->get('carrera');

        $dirEgresado->update();
        return redirect('/diregresados');
    }

    public function destroy($id)
    {
        $dirEgresado = DirEgresado::findOrFail($id);

        $dirEgresado->delete();

        return redirect('diregresados');
    }
}
