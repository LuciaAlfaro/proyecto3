<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TipoVehiculo;
use Illuminate\Http\Request;
use App\Http\Resources\TipoVehiculoResource;

class TipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('tipo_vehiculo'), TipoVehiculo::class);

        return TipoVehiculoResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoVehiculo = json_decode($request->getContent(), true);

        $tipoVehiculo = TipoVehiculo::create($tipoVehiculo['data']['attributes']);

        return new TipoVehiculoResource($tipoVehiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoVehiculo  $tipoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoVehiculo $tipoVehiculo)
    {
        return new TipoVehiculoResource($tipoVehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoVehiculo  $tipoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoVehiculo $tipoVehiculo)
    {
        $tipoVehiculoData = json_decode($request->getContent(), true);
        $tipoVehiculo->update($tipoVehiculoData['data']['attributes']);

        return new TipoVehiculoResource($tipoVehiculo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoVehiculo  $tipoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoVehiculo $tipoVehiculo)
    {
        $tipoVehiculo->delete();
    }
}
