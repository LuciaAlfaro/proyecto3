<?php

namespace App\Http\Controllers;
//use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $bicis = self::$arrayBicis;
    return view('productos.index', array('arrayBicis'=>$bicis));
    }

    public function getShow($id)
    {
        return view('productos.show', array('id'=>self::$arrayBicis[$id], 'id'=>$id));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        return view('productos.edit', array('id'=>$id, self::$arrayBicis[$id]));
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
        );



}
