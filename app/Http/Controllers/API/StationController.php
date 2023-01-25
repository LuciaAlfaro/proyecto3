<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\StationResource;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Inicialmente, vamos a utilizar una estacion constante
        $contract = 'santander';
        // La key la cogeremos de las variables de entorno
        $key = "&apiKey=" . env("API_KEY");
        $urlJCDecauxAPI = "https://api.jcdecaux.com/vls/v1/stations?contract=" . $contract . $key;
        // $queryString = "wskey=$key&query=who:\"$author\"";
        $urlConsulta = $urlJCDecauxAPI;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return StationResource::collection($response->collect());
    }
}
