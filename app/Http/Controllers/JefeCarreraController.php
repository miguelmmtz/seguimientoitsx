<?php

namespace App\Http\Controllers;

use App\Http\Requests\JefeEditFormRequest;
use App\Http\Requests\JefeFormRequest;
use App\Models\JefeCarrera;
use Illuminate\Http\Request;

class JefeCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jefes = JefeCarrera::all();
        return view('jefescarrera.index',['jefes'=>$jefes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jefescarrera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JefeFormRequest $request)
    {
        $jefeCarrera = new JefeCarrera();

        $jefeCarrera->nombre = request('nombre');
        $jefeCarrera->carrera = request('carrera');
        $jefeCarrera->email = request('email');
        $jefeCarrera->password = bcrypt(request('password'));

        $jefeCarrera->save();

        return redirect('/jefes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jefescarrera.edit', ['jefe'=>JefeCarrera::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JefeEditFormRequest $request, $id)
    {
        $jefeCarrera = JefeCarrera::findOrFail($id);

        $jefeCarrera->nombre = $request->get('nombre');
        $jefeCarrera->carrera = $request->get('carrera');
        $jefeCarrera->email = $request->get('email');

        $jefeCarrera->update();
        return redirect('/jefes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jefeCarrera = JefeCarrera::findOrFail($id);

        $jefeCarrera->delete();

        return redirect('jefes');
    }
}
