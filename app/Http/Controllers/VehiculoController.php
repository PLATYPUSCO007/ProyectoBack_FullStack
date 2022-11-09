<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehiculos = Vehiculo::all();
        return $vehiculos;
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
        $vehiculo = new Vehiculo();
        $vehiculo->placa = $request->placa;
        $vehiculo->tipo_vehiculo_id = $request->tipo_vehiculo_id;
        $vehiculo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $vehiculo = Vehiculo::firstOrCreate(
            ['placa' => $request->placa],
            ['placa' => $request->placa, 'tipo_vehiculo_id' => '3']
        );

        return $vehiculo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $vehiculo = Vehiculo::where('placa', $request->placa)
            ->update(['tipo_vehiculo_id' => $request->tipo_vehiculo_id]);

        return $vehiculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $vehiculo = Vehiculo::where('placa', $request->placa)
            ->delete();
        return $vehiculo;
    }
}
