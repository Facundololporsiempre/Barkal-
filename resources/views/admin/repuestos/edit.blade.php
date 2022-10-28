@extends('adminlte::page')

@section('title', 'Editar | Repuestos')

@section('content_header')
    <h1>Editar repuesto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($repuesto, ["route" => ["admin.repuestos.update", $repuesto], "autocomplete" => "off", "files" => true, "method" => "put"]) !!}

            {{-- {!! Form::hidden("user_id", auth()->user()->id) !!} --}}

            @include('admin.repuestos.partials.form')

            {!! Form::submit("Actualizar el repuesto", ["class" => "btn btn-primary"]) !!}
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
            object-fit: cover;
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