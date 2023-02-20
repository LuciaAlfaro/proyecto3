<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipoVehiculo_id',
        'station_id',
        'descripcion',
        'imagen'
    ];

    /**
     * Devuelve el tipoVehiculo asociado a un order.
     */
    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipoVehiculo_id');
    }
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }
}
