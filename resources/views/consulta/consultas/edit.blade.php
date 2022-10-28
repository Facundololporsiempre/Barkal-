@extends('adminlte::page')

@section('title', 'Responder consulta | Lista de consultas')

@section('content_header')
    <h1>Consulta hecha por {{$consulta->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($consulta, ["route" => ["consulta.consultas.update", $consulta], "method" => "put"]) !!}
                <div class="form-group">
                    {!! Form::label("name", "Nombre") !!}
                    {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("phone", "Telefono") !!}
                    {!! Form::number("phone", null, ["class" => "form-control", "placeholder" => "Ingrese su numero telefonico", "readonly"]) !!}
                    @error('phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("email", "Correo electronico") !!}
                    {!! Form::text("email", null, ["class" => "form-control", "placeholder" => "Ingrese su correo electronico", "readonly"]) !!}
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("query", "Consulta") !!}
                    {!! Form::textarea("query", null, ["class" => "form-control", "placeholder" => "Ingrese su consulta", "readonly"]) !!}
                    @error('query')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("response", "Responder") !!}
                    {!! Form::textarea("response", null, ["class" => "form-control", "placeholder" => "Ingrese su respuesta"]) !!}
                    @error('response')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            {!! Form::submit("Responder a la consulta", ["class" => "btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop