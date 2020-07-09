<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Aula::all();
        return $aulas;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aula = Aula::create($request->all());
        return $aula;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aula = Aula::find($id);
        return $aula;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aulaAux = Aula::find($id);
        $aulaAux->fill($request->all())->save();
        return $aulaAux;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aulaAux = Aula::find($id);
        $aulaAux->delete();
        return $aulaAux;
    }
}
