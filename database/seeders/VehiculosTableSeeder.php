<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\TipoVehiculo;
use App\Models\Vehiculo;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedVehiculos();
        $this->command->alert('Tabla vehiculos inicializada con datos!');
    }
    private function seedVehiculos() {
        DB::table('vehiculos')->truncate();
        $tipoVehiculos = TipoVehiculo::all()->all();

        $tipoVehiculos[0]->vehiculos()->saveMany([
            new Vehiculo([
                'descripcion' => 'Una bici muy chula',
                'imagen'      => 'https://m.media-amazon.com/images/I/812pjcUZTjS._AC_SL1500_.jpg'
            ]),
            new Vehiculo([
                'descripcion' => 'Una bici amarilla',
                'imagen' => 'https://tuvalum.com/blog/wp-content/uploads/2017/08/bicicleta-suspensi%C3%B3n-delantera.jpg'
            ]),
        ]
        );

        $tipoVehiculos[1]->vehiculos()->saveMany([
            new Vehiculo([
                'descripcion' => 'Patinete molón',
                'imagen' => 'https://cocheselectricosninos.com/1219/patinete-electrico-citycoco-gold-60v-ataa-cars.jpg'
            ])
        ]

            );

/*         DB::table('vehiculos')->truncate();
        DB::table('vehiculos')->insert([
            'tipo' => 'bicicleta',
            'disponible' => true,
            'descripcion' => 'Una bici muy chula',
            'imagen' => 'https://m.media-amazon.com/images/I/812pjcUZTjS._AC_SL1500_.jpg',
            'roto' => false,
            'desc_rotura' => 'No se ha roto nunca',
            'ult_reparacion' => '01/01/01'
        ]);
        DB::table('vehiculos')->insert([
            'tipo' => 'bicicleta',
            'disponible' => true,
            'descripcion' => 'Una bici amarilla',
            'imagen' => 'https://tuvalum.com/blog/wp-content/uploads/2017/08/bicicleta-suspensi%C3%B3n-delantera.jpg',
            'roto' => false,
            'desc_rotura' => 'No se ha roto nunca',
            'ult_reparacion' => '01/01/01'
        ]);
        DB::table('vehiculos')->insert([
            'tipo' => 'patinete',
            'disponible' => true,
            'descripcion' => 'Patinete molón',
            'imagen' => 'https://cocheselectricosninos.com/1219/patinete-electrico-citycoco-gold-60v-ataa-cars.jpg',
            'roto' => false,
            'desc_rotura' => 'No se ha roto nunca',
            'ult_reparacion' => '01/01/01'
        ]); */
    }
}
