@extends('adminlte::page')

@section('title', 'Dashboard | Barkali')

@section('content_header')
    <h1>Contenido principal</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre de la vista</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Usuarios</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.users.index")}}">Ver la vista de Usuarios</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lista de roles</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.roles.index")}}">Ver la vista de Lista de roles</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Categorias</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.categorias.index")}}">Ver la vista de Categorias</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Marcas</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.marcas.index")}}">Ver la vista de Marcas</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Modelos</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.modelos.index")}}">Ver la vista de Modelos</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lista de repuestos</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.repuestos.index")}}">Ver la vista de Lista de repuestos</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Agregar nuevos repuestos</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("admin.repuestos.create")}}">Ver la vista de Agregar nuevos repuestos</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Lista de consultas recibidas</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("consulta.consultas.index")}}">Ver la vista de Lista de consultas recibidas</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Lista de formularios de compras hecho por los usuarios</td>
                    <td width="150px">
                        <a class="btn btn-primary btn-sm" href="{{route("formulario.formularios.index")}}">Ver la vista de Lista de formularios de compras hecho por los usuarios</a>
                    </td>
                </tr>
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