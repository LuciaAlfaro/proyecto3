@extends('layouts.master')
@section('content')
    <div class="row">

        @foreach ($arrayBicis as $key => $bici)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/productos/show/' . $key) }}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{ $bici['descripcion'] }}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>
@stop
