@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
@can('admin.marcas.create')
    <a class="btn btn-secondary float-right" href="{{route("admin.marcas.create")}}">Agregar una nueva marca</a>
@endcan
    <h1>Mostrar las marcas que tenemos</h1>
@stop

@section('content')
@if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <td>{{$marca->id}}</td>
                            <td>{{$marca->name}}</td>
                            <td width="10px">
                                @can('admin.marcas.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route("admin.marcas.edit", $marca)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.marcas.destroy')
                                    <form action="{{route("admin.marcas.destroy", $marca)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop