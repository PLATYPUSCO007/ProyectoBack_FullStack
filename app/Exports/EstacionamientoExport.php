<?php

namespace App\Exports;

use App\Models\estacionamiento;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EstacionamientoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('estacionamientos')
            ->select('estacionamientos.vehiculo_placa', DB::raw('SUM(estacionamientos.total_tiempo) AS Tiempo_estacionado'), DB::raw('SUM(estacionamientos.importe) AS Cantidad_a_pagar'))
            ->join('vehiculos', function ($join){
                $join->on('estacionamientos.vehiculo_placa', '=', 'vehiculos.placa')
                    ->where('vehiculos.tipo_vehiculo_id', '=', '2');
            })
            ->groupBy('vehiculo_placa')
            ->get();

    }

    public function headings(): array
    {
        return [
            'Núm. placa',
            'Tiempo estacionado (min.)',
            'Cantidad a pagar'
        ];
    }
}
