<div class="form-group">
    {!! Form::label("name", "Nombre") !!}
    {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "Ingrese el nombre del modelo"]) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label("slug", "Slug") !!}
    {!! Form::text("slug", null, ["class" => "form-control", "placeholder" => "Ingrese el slug del modelo", "readonly"]) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
{{-- <div class="form-group">
    {!! Form::label("color", "Color") !!}
    {!! Form::select("color", $colores, null, ["class" => "form-control"]) !!}
    @error('color')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div> --}}