<?php

namespace App\Http\Controllers;

use App\incidente;
use App\tipoincidente;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = incidente::all();
        return view('incidente.index', compact('incidentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoincidente = tipoincidente::all();
        return view ('incidente.create', compact('tipoincidente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidente = new incidente();
        $incidente->titulo = $request->titulo;
        $incidente->descricao = $request->descricao;
        $incidente->criticidade = $request->criticidade;
        $incidente->tipo_incidente = $request->tipo_incidente;
        $incidente->status = "a";
        $incidente->save();
        return redirect('/incidente')->with('success','Incidente inserido com sucesso.');
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
        $i = incidente::find($id);
        $ti = tipoincidente::all();
        return view('incidente.edit', compact('i','ti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $incidente = incidente::find($id);
        $incidente->titulo = $request->titulo;
        $incidente->descricao = $request->descricao;
        $incidente->criticidade = $request->criticidade;
        $incidente->tipo_incidente = $request->tipo_incidente;
        $incidente->status = $request->status;
        $incidente->save();
        return redirect('/incidente')->with('success','Incidente alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidente = incidente::find($id);
        $incidente->delete();
        return redirect('/incidente')->with('success','Incidente removido com sucesso.');
    }
}
