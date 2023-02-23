<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;
use Illuminate\Support\Facades\Http;

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

        $contract = 'santander';

        // La key la cogeremos de las variables de entorno
        $key = "&apiKey=" . env("API_KEY");
        $urlJCDecauxAPI = "https://api.jcdecaux.com/vls/v1/stations?contract=" . $contract . $key;
        $urlConsulta = $urlJCDecauxAPI;
        // Consultamos a la API
        $response = Http::get($urlConsulta);

        $estaciones = json_decode($response->collect());

        foreach ($estaciones as $estacion) {
            Station::insert([
                'nombre' => $estacion->name,
                'direccion' => $estacion->address,
                'latitud' => $estacion->position->lat,
                'longitud' => $estacion->position->lng,
                'ciudad' => $estacion->contract_name
            ]);
        }
    }
}
