<div class="form-group">
    {!! Form::label("name", "Nombre") !!}
    {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "Ingrese el nombre del repuesto"]) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("slug", "Slug") !!}
    {!! Form::text("slug", null, ["class" => "form-control", "placeholder" => "Ingrese el slug del repuesto", "readonly"]) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("description", "Descripcion") !!}
    {!! Form::text("description", null, ["class" => "form-control", "placeholder" => "Ingrese la descripcion del repuesto"]) !!}
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("stock", "Stock") !!}
    {!! Form::number("stock", null, ["class" => "form-control", "placeholder" => "Ingrese el stock del repuesto"]) !!}
    @error('stock')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("price", "Precio") !!}
    {!! Form::text("price", null, ["class" => "form-control", "placeholder" => "Ingrese el precio del repuesto"]) !!}
    @error('price')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("marca_id", "Marcas") !!}
    {!! Form::select("marca_id", $marcas, null, ["class" => "form-control"]) !!}
    @error('marca_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("modelo_id", "Modelos") !!}
    {!! Form::select("modelo_id", $modelos, null, ["class" => "form-control"]) !!}
    @error('modelo_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label("categoria_id", "Categorias") !!}
    {!! Form::select("categoria_id", $categorias, null, ["class" => "form-control"]) !!}
    @error('categoria_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image__wrapper">
            @isset ($repuesto->image)
                <img id="picture" src="{{Storage::url($repuesto->image->url)}}" alt="">
            @else
                <img id="picture" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label("file", "Imagen que se mostrara en el repuesto") !!}
            {!! Form::file("file", ["class" => "form-control-file", "accept" => "image/*"]) !!}
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum iste ab earum quam enim eligendi quia incidunt? Vitae aliquid hic laboriosam maiores ab perferendis architecto natus vel. Pariatur, rerum?</p>
    </div>
</div>


{{-- <div class="form-group">
    <p class="font-weight-bold">Marcas</p>
    @foreach ($marcas as $marca)
        <label class="mr-3">
            {!! Form::checkbox("marcas[]", $marca->id, null) !!}
            {{$marca->name}}
        </label>
    @endforeach
    @error('marcas')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Modelos</p>
    @foreach ($modelos as $modelo)
        <label class="mr-3">
            {!! Form::checkbox("modelos[]", $modelo->id, null) !!}
            {{$modelo->name}}
        </label>
    @endforeach
    @error('modelos')
    <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div> --}}