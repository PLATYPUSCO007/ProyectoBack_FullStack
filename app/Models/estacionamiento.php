<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estacionamiento extends Model
{
    use HasFactory;
    protected $fillable = ['hora_entrada', 'hora_salida', 'importe', 'total_tiempo', 'vehiculo_placa'];
}
