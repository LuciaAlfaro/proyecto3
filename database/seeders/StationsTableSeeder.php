<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::truncate();

        Station::insert([
            [
                'nombre' => 'b',
                'direccion' => 'b',
                'latitud' => 'b',
                'longitud' => 'b',
                'ciudad' => 'b'
            ],
            [
                'nombre' => 'c',
                'direccion' => 'c',
                'latitud' => 'c',
                'longitud' => 'c',
                'ciudad' => 'c'
            ],
            [
                'nombre' => 'd',
                'direccion' => 'd',
                'latitud' => 'd',
                'longitud' => 'd',
                'ciudad' => 'd'
            ]

        ]);
    }
}
