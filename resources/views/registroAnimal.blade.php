@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Alta de Animal</h1> 
@stop
        @section('content')
            <div class="container">
                <form action="{{url('/home')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-3">
                        <label for="animal">Animal</label>
                        <input type="text" class="form-control"  name="animal" id="animal">
                    </div>
                    <div class="col-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control"  name="nombre" id="nombre">
                    </div>
                    <div class="col-3">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control"  name="tipo" id="tipo">
                    </div>
                    <div class="col-3">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control"  name="edad" id="edad">
                    </div>
                    <div class="col-3">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control"  name="descripcion" id="descripcion">
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Guardar">
            </form>
            </div>
        @stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop