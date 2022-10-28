@extends('adminlte::page')

@section('title', 'Editar | Modelos')

@section('content_header')
    <h1>Editar modelo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($modelo, ["route" => ["admin.modelos.update", $modelo], "method" => "put"]) !!}

            @include('admin.modelos.partials.form')

            {!! Form::submit("Actualizar modelo", ["class" => "btn btn-primary"]) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $('#name').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection