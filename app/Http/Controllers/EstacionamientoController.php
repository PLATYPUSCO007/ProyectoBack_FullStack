<?php

namespace App\Http\Controllers;

use App\Models\estacionamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstacionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estacionamientos = estacionamiento::all();
        return $estacionamientos;
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
        $estacionamiento = new estacionamiento();
        $estacionamiento->hora_entrada = $request->hora_entrada;
        $estacionamiento->hora_salida = $request->hora_salida;
        $estacionamiento->importe = $request->importe;
        $estacionamiento->total_tiempo = $request->total_tiempo;
        $estacionamiento->vehiculo_placa = $request->vehiculo_placa;
        return $estacionamiento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        //$estacionamiento = estacionamiento::find($request->id);
        $estacionamiento = DB::select('SELECT E.*, V.tipo_vehiculo_id, T.nombre FROM `estacionamientos` E INNER JOIN vehiculos V ON E.vehiculo_placa = V.placa INNER JOIN tipo_vehiculos T ON V.tipo_vehiculo_id = T.id WHERE E.vehiculo_placa = ? AND E.id IN (SELECT MAX(id) FROM estacionamientos WHERE vehiculo_placa = ?)', [$request->placa, $request->placa]);
        return $estacionamiento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(estacionamiento $estacionamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $estacionamiento = estacionamiento::findOrFail($request->id);
        $estacionamiento->hora_entrada = $request->hora_entrada;
        $estacionamiento->hora_salida = $request->hora_salida;
        $estacionamiento->importe = $request->importe;
        $estacionamiento->total_tiempo = $request->total_tiempo;
        $estacionamiento->vehiculo_placa = $request->vehiculo_placa;
        $estacionamiento->save();

        return $estacionamiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estacionamiento  $estacionamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $estacionamiento = estacionamiento::destroy($request->id);
        return $estacionamiento;
    }
}
