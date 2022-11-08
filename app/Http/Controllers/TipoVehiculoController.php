<?php

namespace App\Http\Controllers;

use App\Models\tipo_vehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipos = tipo_vehiculo::all();
        return $tipos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tipo = new tipo_vehiculo();
        $tipo->nombre = $request->nombre;
        $tipo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_vehiculo $tipo_vehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_vehiculo $tipo_vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $tipo = tipo_vehiculo::findOrFail($request->id);
        $tipo->nombre = $request->nombre;
        $tipo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_vehiculo  $tipo_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $tipo = tipo_vehiculo::destroy($request->id);
        return $tipo;
    }
}
