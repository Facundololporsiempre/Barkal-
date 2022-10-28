@extends('adminlte::page')

@section('title', 'Modelos')

@section('content_header')
@can('admin.modelos.create')
    <a class="btn btn-secondary float-right" href="{{route("admin.modelos.create")}}">Agregar un modelo</a>
@endcan
    <h1>Lista de los modelos</h1>
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
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modelos as $modelo)
                        <tr>
                            <td>{{$modelo->id}}</td>
                            <td>{{$modelo->name}}</td>
                            <td width="10px">
                                @can('admin.modelos.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route("admin.modelos.edit", $modelo)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.modelos.destroy')
                                    <form action="{{route("admin.modelos.destroy", $modelo)}}" method="post">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop