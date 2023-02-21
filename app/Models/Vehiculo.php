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
     * Devuelve el tipoVehiculo asociado a un vehiculo.
     */
    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipoVehiculo_id');
    }
    /**
     * Devuelve la station asociada a un vehiculo.
     */
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }

    /**
     * Los customer que tiene asignados un determinado vehiculo.
     */
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'vehiculo_customer', 'vehiculo_id', 'customer_id');
    }
}
