@extends('adminlte::page')

@section('title', 'Agregar | Repuestos')

@section('content_header')
    <h1>Agregar nuevo repuesto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(["route" => "admin.repuestos.store", "autocomplete" => "off", "files" => true]) !!}

            {{-- {!! Form::hidden("user_id", auth()->user()->id) !!} --}}

            @include('admin.repuestos.partials.form')

            {!! Form::submit("Agregar un nuevo repuesto", ["class" => "btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image__wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image__wrapper img{
            position: absolute;
            object-fit: contain;
            width: 100%;
            height: 100%;
        }
    </style>
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
        document.getElementById("file").addEventListener("change", cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>

@endsection