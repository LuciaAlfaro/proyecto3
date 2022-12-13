@extends('layouts.master')
@section('content')
    <h1>Pantalla create</h1>

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Vehículo
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('/catalog/create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="title">Tipo vehículo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Imagen</label>
                            <input type="text" name="imagen" id="imagen" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir vehículo
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
