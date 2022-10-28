@extends('adminlte::page')

@section('title', 'Repuestos')

@section('content_header')
<a class="btn btn-secondary float-right" href="{{route("admin.repuestos.create")}}">Agregar un repuesto</a>
    <h1>Listado de repuestos</h1>
@stop

@section('content')
    @if (session("info"))
        <div class="alert alert-success">
            <strong>{{session("info")}}</strong>
        </div>
    @endif
    @livewire("admin.repuesto-index")
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop