@extends('adminlte::page')

@section('title', 'Ver formulario de compra realizado por el usuario | Lista de compras hecha por los usuarios')

@section('content_header')
    <h1>Información de la compra hecha por: "<b>{{$formulario->name}}</b>"</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($formulario, ["route" => "consulta.consultas.store", "method" => "put"]) !!}
            <h3 class="text-center"><b>Forma de envio elegido</b></h3>
            <div class="form-group">
                <img class="mr-2" width="112px" height="96px" src="{{URL("vendor\adminlte\dist\img\caja.png")}}" alt="">
                {!! Form::label("status", "Lo retiro yo") !!}
                {!! Form::radio("status", 1, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                @error('status')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <img class="mr-2" width="128px" height="96px" src="{{URL("vendor\adminlte\dist\img\delivery-truck.webp")}}" alt="">
                {!! Form::label("status", "Quiero que lo envien") !!}
                {!! Form::radio("status", 2, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                @error('status')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <hr>
            <div class="float-right mx-10"><span><b class="text-primary">*Campos obligatorios "Quiero que lo envien"</b></span></div><br>
            <div class="float-right mx-10"><span><b class="text-danger">*Campos obligatorios "Lo retiro yo"</b></span></div>
            <br>
            <h3 class="text-center"><b>Lugar de entrega del repuesto</b></h3>
                <div class="form-group">
                    {!! Form::label("street", "Calle") !!}
                    <span class="text-primary"><b>*</b></span>
                    {!! Form::text("street", null, ["class" => "form-control", "placeholder" => "Ingrese su calle...", "readonly"]) !!}
                    @error('street')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("number", "Numero") !!}
                    <span class="text-primary"><b>*</b></span>
                    {!! Form::number("number", null, ["class" => "form-control", "placeholder" => "Ingrese su numero...", "readonly"]) !!}
                    @error('number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("department", "Departamento") !!}
                    {!! Form::text("department", null, ["class" => "form-control", "placeholder" => "Ingrese su departamento...", "readonly"]) !!}
                    @error('department')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("flat", "Piso") !!}
                    {!! Form::select("flat", $formularioPiso, null, ["class" => "form-control", "placeholder" => "Ingrese el numero de su piso", "readonly"]) !!}
                    @error('flat')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("cpl", "Codigo postal") !!}
                    <span class="text-primary"><b>*</b></span>
                    {!! Form::number("cpl", null, ["class" => "form-control", "placeholder" => "Ingrese el codigo postal...", "readonly"]) !!}
                    @error('cpl')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("province", "Provincia") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::select("province", $formularioProv, null, ["class" => "form-control", "placeholder" => "Ingrese su provincia", "readonly"]) !!}
                    @error('province')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("city", "Ciudad") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::select("city", $formularioCiudad, null, ["class" => "form-control", "placeholder" => "Ingrese su ciudad", "readonly"]) !!}
                    @error('city')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="float-right mx-10"><span><b class="text-primary">*Campos obligatorios "Quiero que lo envien"</b></span></div><br>
                <div class="float-right mx-10"><span><b class="text-danger">*Campos obligatorios "Lo retiro yo"</b></span></div>
                <br>
                <h3 class="text-center"><b>Forma de pago elegido </b><span class="text-primary"><b>*</b></span><span class="text-danger"><b style="position: relative; left: -4px;">*</b></span></h3>
                <div class="form-group">
                    <img class="mr-2" width="80px" height="48px" src="{{URL("vendor\adminlte\dist\img\avisa_logo.png")}}" alt="">
                    {!! Form::label("payment", "VISA") !!}
                    {!! Form::radio("payment", 1, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                    @error('street')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <img class="mr-2" width="80px" height="48px" src="{{URL("vendor\adminlte\dist\img\mastercard.png")}}" alt="">
                    {!! Form::label("payment", "Master Card") !!}
                    {!! Form::radio("payment", 2, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                    @error('payment')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <img class="mr-2" width="80px" height="48px" src="{{URL("vendor\adminlte\dist\img\bvisadebito.png")}}" alt="">
                    {!! Form::label("payment", "VISA DEBITO") !!}
                    {!! Form::radio("payment", 3, ["class" => "form-control", "placeholder" => "Ingrese su nombre", "readonly"]) !!}
                    @error('payment')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="float-right mx-10"><span><b class="text-primary">*Campos obligatorios "Quiero que lo envien"</b></span></div><br>
                <div class="float-right mx-10"><span><b class="text-danger">*Campos obligatorios "Lo retiro yo"</b></span></div>
                <br>
                <h3 class="text-center"><b>Datos del titular</b></h3>
                <div class="form-group">
                    {!! Form::label("name", "Nombre") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "Ingrese su nombre completo...", "readonly"]) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("surname", "Apellido") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::text("surname", null, ["class" => "form-control", "placeholder" => "Ingrese su apellido completo...", "readonly"]) !!}
                    @error('surname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("dni", "DNI") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::number("dni", null, ["class" => "form-control", "placeholder" => "Ingrese su dni...", "readonly"]) !!}
                    @error('dni')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("phone", "Telefono") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::number("phone", null, ["class" => "form-control", "placeholder" => "Ingrese su numero telefonico...", "readonly"]) !!}
                    @error('phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("email", "Correo electronico") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::email("email", null, ["class" => "form-control", "placeholder" => "Ingrese su correo electronico...", "readonly"]) !!}
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("birth", "Fecha de nacimiento") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::date("birth", null, ["class" => "form-control", "placeholder" => "Ingrese su dia de nacimiento...", "readonly"]) !!}
                    @error('birth')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <hr>
                <div class="float-right mx-10"><span><b class="text-primary">*Campos obligatorios "Quiero que lo envien"</b></span></div><br>
                <div class="float-right mx-10"><span><b class="text-danger">*Campos obligatorios "Lo retiro yo"</b></span></div>
                <br>
                <h3 class="text-center"><b>Datos proporcionado del medio de pago</b></h3>
                <div class="form-group">
                    {!! Form::label("headline", "Titular") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::text("headline", null, ["class" => "form-control", "placeholder" => "Ingrese el nombre del titular...", "readonly"]) !!}
                    @error('headline')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("numberT", "Numero de tarjeta") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::number("numberT", null, ["class" => "form-control", "placeholder" => "Ingrese el número de su tarjeta...", "readonly"]) !!}
                    @error('numberT')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("codiS", "Codigo de seguridad") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::number("codeS", null, ["class" => "form-control", "placeholder" => "Ingrese el codigo de seguridad...", "readonly"]) !!}
                    @error('codeS')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("validM", "Valido hasta (mes)") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::select("validM", $validoM, null, ["class" => "form-control", "placeholder" => "Ingrese la validación...", "readonly"]) !!}
                    @error('validM')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label("validA", "Valido hasta (año)") !!}
                    <span class="text-primary"><b>*</b></span>
                    <span class="text-danger"><b style="position: relative; left: -4px;">*</b></span>
                    {!! Form::select("validA", $validoA, null, ["class" => "form-control", "placeholder" => "Ingrese la validación...", "readonly"]) !!}
                    @error('validA')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <h3 class="text-center"><b>Repuesto comprado por el usuario: "{{$formulario->name}}"</b></h3>
                {{-- <p>Repuesto comprado: <b>{{$formulario->repuestoname}}</b></p> --}}
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre del repuesto</th>
                                    <th>Marca del repuesto</th>
                                    <th>Modelo del repuesto</th>
                                    <th>Categoria del repuesto</th>
                                    <th>Precio del repuesto</th>
                                    <th>Cantidad comprada</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$formulario->repuestoname}}</td>
                                    <td>{{$formulario->repuestomarca}}</td>
                                    <td>{{$formulario->repuestomodelo}}</td>
                                    <td>{{$formulario->repuestocategoria}}</td>
                                    <td>${{$formulario->precio}}</td>
                                    <td>{{$formulario->cantidad}}</td>
                                    <td>
                                        @php
                                            $precioI =  $formulario->precio;
                                            $total = $precioI * $formulario->cantidad;
                                            echo("$" . $total . ".000")
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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