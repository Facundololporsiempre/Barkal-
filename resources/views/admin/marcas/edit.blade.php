@extends('adminlte::page')

@section('title', 'Editar | Marcas')

@section('content_header')
    <h1>Actualizar la marca</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($marca, ["route" => ["admin.marcas.update", $marca], "files" => true, "method" => "put"]) !!}

            @include("admin.marcas.partials.form")

            {!! Form::submit("Actualizar marca", ["class" => "btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- <style>
        .image__wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image__wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style> --}}
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

        // Cambiar imagen
        // document.getElementById("file").addEventListener("change", cambiarImagen);

        // function cambiarImagen(event){
        //     var file = event.target.files[0];

        //     var reader = new FileReader();
        //     reader.onload = (event) => {
        //         document.getElementById("picture").setAttribute("src", event.target.result);
        //     };
        //     reader.readAsDataURL(file);
        // }
    </script>

@endsection