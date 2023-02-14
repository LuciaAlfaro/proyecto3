<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
/*         $bicis = self::$arrayBicis; */
        $bicis = Vehiculo::all();
    return view('productos.index', array('arrayBicis'=>$bicis));
    }

    public function getShow($id)
    {
        $bici = Vehiculo::findOrFail($id);
        return view('productos.show', array('bici'=>$bici, 'id'=>$id));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        $bici = Vehiculo::findOrFail($id);
        return view('productos.edit', array('bici'=>$bici, 'id'=>$id));
    }

    public function store(Request $request)
    {
        $registroNuevo = new Vehiculo();
        $registroNuevo-> tipo =$request->input('tipo');
        $registroNuevo-> descripcion =$request->input('descripcion');
        $registroNuevo-> imagen =$request->input('imagen');
        $registroNuevo->save();

        $url = action([CatalogController::class, 'getShow' ], ['id' => $registroNuevo->id]);
        return redirect($url);
    }

    public function putStore($id, Request $request){
        $bici = Vehiculo::findOrFail($id);
        $bici->tipo = $request->input('tipo');
        $bici-> descripcion =$request->input('descripcion');
        $bici-> imagen =$request->input('imagen');
        $bici->save();

        $url = action([CatalogController::class, 'getShow' ], ['id' => $bici->id]);
        return redirect($url);
    }

    private static $arrayBicis = array(
        array(
            'tipo' => '0',
            'ocupada' => true,
            'descripcion' => 'bici muy chula',
            'imagen' => 'https://m.media-amazon.com/images/I/812pjcUZTjS._AC_SL1500_.jpg'
        ),
        array(
            'tipo' => '0',
            'ocupada' => false,
            'descripcion' => 'bici moderna',
            'imagen' => 'https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/065684_00_1.jpg'
        ),
        array(
            'tipo' => '0',
            'ocupada' => false,
            'descripcion' => 'bici amarilla',
            'imagen' => 'https://tuvalum.com/blog/wp-content/uploads/2017/08/bicicleta-suspensi%C3%B3n-delantera.jpg'
        ),
        array(
            'tipo' => '1',
            'ocupada' => false,
            'descripcion' => 'patinete',
            'imagen' => 'https://cocheselectricosninos.com/1219/patinete-electrico-citycoco-gold-60v-ataa-cars.jpg'
        ),
        array(
            'tipo' => '3',
            'ocupada' => false,
            'descripcion' => 'un pedazo de triciclo',
            'imagen' => 'https://cocheselectricosninos.com/1219/patinete-electrico-citycoco-gold-60v-ataa-cars.jpg'
        )
        );



}
