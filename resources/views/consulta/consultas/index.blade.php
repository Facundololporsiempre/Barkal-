@extends('adminlte::page')

@section('title', 'Lista de consultas')

@section('content_header')
    <h1>Lista de consultas de usuarios</h1>
@stop

@section('content')
@if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
@endif
@if ($consultas->count())
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                {{-- <th>Telefono</th> --}}
                <th>Correo electronico</th>
                {{-- <th>Consuta</th> --}}
                {{-- <th>Respuesta</th> --}}
                <th></th>
            </thead>
            <tbody>
                @foreach ($consultas as $consulta)
                    <tr>
                        <td>{{$consulta->id}}</td>
                        <td>{{$consulta->name}}</td>
                        {{-- <td>{{$consulta->phone}}</td> --}}
                        <td>{{$consulta->email}}</td>
                        {{-- <td>{{$consulta->query}}</td> --}}
                        {{-- <td>{{$consulta->response}}</td> --}}
                        <td width="10px">
                            @can('consulta.consultas.edit')
                                <a class="btn btn-primary btn-sm" href="{{route("consulta.consultas.edit", $consulta)}}">Ver</a>
                            @endcan
                        </td>
                        {{-- <td width="10px">
                            @can('consulta.consultas.destroy')
                                <form action="{{route("consulta.consultas.destroy", $consulta)}}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            @endcan
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<div class="card">
    <div class="card-body">
        <strong>No hay ningun consulta hecha por los usuarios...</strong>
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