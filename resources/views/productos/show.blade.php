@extends('layouts.master')
@section('content')
<div class='col-12'>
    <h1>Pantalla show del producto {{$id}}</h1>
    <h2>{{$bici['descripcion']}}</h2>
    <img style='width:300px'src='{{$bici['imagen']}}'>
    <a href='{{url('/productos/edit/' . $id)}}' >Modificar producto</a>
</div>
@stop
