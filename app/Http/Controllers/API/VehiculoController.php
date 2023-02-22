<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Resources\VehiculoResource;

class VehiculoController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Vehiculo::class, 'vehiculo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosVehiculos =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Vehiculo::where('descripcion', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Vehiculo::paginate($numElementos);

            return VehiculoResource::collection($registrosVehiculos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $vehiculo = json_decode($request->getContent(), true);

            $vehiculo = Vehiculo::create($vehiculo['data']['attributes']);

            return new VehiculoResource($vehiculo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        return new VehiculoResource($vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculoData = json_decode($request->getContent(), true);
        $vehiculo->update($vehiculoData['data']['attributes']);

        return new VehiculoResource($vehiculo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
    }
}
