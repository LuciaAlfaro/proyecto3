<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('encuentro', function () {
    return view('encuentro');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('thingsicando', function() {
    return view('thingsicando');
});
Route::get('accomplishments', function() {
    return view('accomplishments');
}); */

Route::get('/',  [HomeController::class, 'getHome']);

Route::get('login', function () {
    return view('auth.login');
});

Route::get('productos', [CatalogController::class, 'getIndex']);

Route::get('productos/show/{id}',  [CatalogController::class, 'getShow']);

Route::get('productos/create', [CatalogController::class, 'getCreate']);

Route::get('productos/edit/{id}', [CatalogController::class, 'getEdit']);
