<?php

namespace App\Http\Controllers;

use App\Http\Requests\JefeEditFormRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        //Se excluye el id 1 correspondiente al administrador
        $jefes = User::select('id','name','email')->whereNotIn('id', [1])->get();
        return view('jefescarrera.index',['jefes'=>$jefes]);
    }

    public function create()
    {
        return view('jefescarrera.create');
    }

    public function store(Request $request)
    {
        $jefeCarrera = new User();

        $jefeCarrera->name = request('name');
        $jefeCarrera->email = request('email');
        $jefeCarrera->password = bcrypt(request('password'));

        $jefeCarrera->save();

        return redirect('/jefes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('jefescarrera.edit', ['jefe'=>User::findOrFail($id)]);
    }

    public function update(JefeEditFormRequest $request, $id)
    {
        $jefeCarrera = User::findOrFail($id);

        $jefeCarrera->name = $request->get('name');
        $jefeCarrera->email = $request->get('email');

        $jefeCarrera->update();
        return redirect('/jefes');
    }

    public function destroy($id)
    {
        $jefeCarrera = User::findOrFail($id);

        $jefeCarrera->delete();

        return redirect('jefes');
    }
}
