<div class="form-group">
    {!! Form::label("name", "Nombre") !!}
    {!! Form::text("name", null, ["class" => "form-control" ,"placeholder" => "Ingrese el nombre de la marca que vas a agregar"]) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label("slug", "Slug") !!}
    {!! Form::text("slug", null, ["class" => "form-control" ,"placeholder" => "Ingrese el nombre del slug que vas a agregar", "readonly"]) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- <div class="row mb-3">
    <div class="col">
        <div class="image__wrapper">
            @isset ($marca->image)
                <img id="picture" src="{{Storage::url($marca->image->url)}}" alt="">
            @else
                <img id="picture" src="https://p77-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/81316775e8be41a980dea821edcbe49b?x-expires=1663801200&x-signature=xbEyg1PjK%2BIyrYefoRSQ7kexF9M%3D" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label("file", "Imagen que se mostrara de la marca del repuesto de auto") !!}
            {!! Form::file("file", ["class" => "form-control-file", "accept" => "image/*"]) !!}
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum iste ab earum quam enim eligendi quia incidunt? Vitae aliquid hic laboriosam maiores ab perferendis architecto natus vel. Pariatur, rerum?</p>
    </div>
</div> --}}
