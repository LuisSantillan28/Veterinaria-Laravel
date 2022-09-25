@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Registro de Animales</h1>
@stop
@section('content')
    <a href="home/create" class="btn btn-info">Agregar Servicio<i class="fas fa-fw fa-plus"></i></a>
    <table class="table table-light">
        <thead class="thead-ligth">
            <tr>
                <th>#</th>
                <th>Animal</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Edad</th>
                <th>Descripción</th>
                <th>Eliminar | Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
            <tr>
                <td>{{$animal->idAnimal}}</td>
                <td>{{$animal->animal}}</td>
                <td>{{$animal->nombre}}</td>
                <td>{{$animal->tipo}}</td>
                <td>{{$animal->edad}}</td>
                <td>{{$animal->descripcion}}</td>
                <td>
                    <form action="{{url('/home/'.$animal->idAnimal)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                        </form>
                        <a href="{{url('/home/'.$animal->idAnimal.'/edit')}}">
                            <button type="submit" class="btn btn-warning" onclick="return confirm('Editar Registro!')">
                            <i class="fas fa-fw fa-pen"></i></button>
                        </a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop