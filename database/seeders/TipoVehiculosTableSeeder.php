<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoVehiculo;

class TipoVehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tipo_vehiculo	precio
        TipoVehiculo::truncate();

        TipoVehiculo::insert([
            [
            'tipo_vehiculo' => 'bicicleta mecánica',
            'precio' => 3.95
            ],
            [
                'tipo_vehiculo' => 'patinete eléctrico',
                'precio' => 4.95
            ],
            [
                'tipo_vehiculo' => 'bicicleta eléctrica',
                'precio' => 4.95
            ],
            [
                'tipo_vehiculo' => 'tándem',
                'precio' => 9.95
            ]
            ]);
    }
}
