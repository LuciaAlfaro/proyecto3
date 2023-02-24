<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\StationResource;

class StationController extends Controller
{
    public function __construct()
    {
         $this->authorizeResource(Station::class, 'station');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('ciudad', 'nombre'), Station::class);

        return StationResource::collection($registros->paginate($numElementos));
/*         $busquedaFiltroCiudad = $request->input('filter');
        if($busquedaFiltroCiudad && array_key_exists('ciudad', $busquedaFiltroCiudad)){
            $contract=$busquedaFiltroCiudad['ciudad'];
        } else {
        // Inicialmente, vamos a utilizar una estacion constante
        $contract = 'santander';
        }
        // La key la cogeremos de las variables de entorno
        $key = "&apiKey=" . env("API_KEY");
        $urlJCDecauxAPI = "https://api.jcdecaux.com/vls/v1/stations?contract=" . $contract . $key;
        $urlConsulta = $urlJCDecauxAPI;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return StationResource::collection($response->collect()); */
    }
    public function show(Station $station)
    {
        return new StationResource($station);
    }

    public function store(Request $request)
    {
        {
            $station = json_decode($request->getContent(), true);

            $station = Station::create($station['data']['attributes']);

            return new StationResource($station);
        }
    }

    public function update(Request $request, Station $station)
    {
        $stationData = json_decode($request->getContent(), true);
        $station->update($stationData['data']['attributes']);

        return new StationResource($station);
    }

    public function destroy(Station $station)
    {
        $station->delete();
    }
}
