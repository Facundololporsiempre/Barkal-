@extends('adminlte::page')

@section('title', 'Lista de compras hecha por los usuarios')

@section('content_header')
    <h1>Lista de los formularios de compras hecho por los usuarios</h1>
@stop

@section('content')
{{-- @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
@endif --}}
@if ($formularios->count())
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($formularios as $formulario)
                    <tr>
                        <td>{{$formulario->id}}</td>
                        <td>{{$formulario->name}}</td>
                        <td>{{$formulario->surname}}</td>
                        <td>{{$formulario->dni}}</td>
                        <td width="20px">
                            @can('formulario.formularios.edit')
                                <a class="btn btn-primary btn-sm" href="{{route("formulario.formularios.edit", $formulario)}}">Ver</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<div class="card">
    <div class="card-body">
        <strong>No hay ningun formulario de compras hechas por los usuarios...</strong>
    </div>
</div>
@endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop