<x-guest-layout>
    <div>
        <div class="bg-zinc-200 flex items-center justify-center">
            <div class="bg-white rounded-lg w-full mt-28 mb-10 mx-20">
                <div class="leading-8">
                    <h1 class="text-gray-900 text-center text-3xl font-bold py-8 leading-8 mx-10">Rellena este formulario para porder realizar la compra</h1>
                </div>
                {!! Form::open(["route" => "repuestos.storer"]) !!}

                    <hr class="h-1 mx-10 bg-gray-300">

                    <h2 class="text-gray-900 text-center text-xl leading-10 font-bold py-6">Forma de envio</h4>
                        <div class="grid grid-cols-2">
                            <div class="flex justify-center mb-10 mx-10 col-span-2 md:col-span-1 lg:col-span-1">
                                <label class="text-gray-900 flex items-center">
                                    <img class="w-28 h-24 mr-2" src="{{URL("vendor\adminlte\dist\img\caja.png")}}" alt="">
                                    {!! Form::radio("status", 1, null,["class" => "mr-2"]) !!}
                                    Lo retiro yo
                                </label>
                            </div>
                            <div class="flex justify-center mb-10 mx-10 col-span-2 md:col-span-1 lg:col-span-1">
                                <label class="text-gray-900 flex items-center">
                                    <img class="w-28 h-24 mr-2" src="{{URL("vendor\adminlte\dist\img\delivery-truck.webp")}}" alt="">
                                    {!! Form::radio("status", 2, true, ["class" => "mr-2"]) !!}
                                    Quiero que lo envien 
                                </label>
                            </div>
                            @error('status')
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>

                    <hr class="h-1 mx-10 bg-gray-300">

                    <div class="float-right mx-10"><span><b class="text-blue-600">*Campos obligatorios "Quiero que lo envien "</b></span></div><br>
                    <div class="float-right mx-10"><span><b class="text-red-600">*Campos obligatorios "Lo retiro yo"</b></span></div>
                    <h3 class="text-gray-900 text-center text-xl leading-4 font-bold py-6 mx-10 mt-10 md:mt-4 lg:mt-0">Lugar de entrega del repuesto</h3>
                    <div class="grid grid-cols-3">
                        <div class="col-span-3">
                            <p class="text-zinc-400 text-center md:text-left lg:text-left text-lg leading-4 font-bold pb-3 mx-10">Dirección</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="col-span-3">
                            <div class="flex justify-center md:justify-start">
                                {!! Form::label("street", "Calle", ["class" => "text-gray-900 mx-10 flex justify-center md:justify-start lg:justify-start"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                            </div>
                        </div>
                        <div class="flex justify-center mb-10 col-span-3">
                            {!! Form::text("street", null, ["class" => "w-72 md:w-full lg:w-full mx-10 rounded-full", "placeholder" => "Ingrese su calle..."]) !!}
                        </div>
                        @error('street')
                            <small class="col-span-3 relative bottom-10 text-red-600 mx-10 flex justify-center md:justify-start lg:justify-start">{{$message}}</small>
                        @enderror
                        <div class="col-span-3 md:col-span-1 md:ml-10">
                            <div class="flex justify-center">
                                {!! Form::label("number", "Numero", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 ml-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::number("number", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su numero..."]) !!}
                            </div>
                            @error('number')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("department", "Departamento", ["class" => "text-gray-900 mx-10"]) !!}
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::text("department", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese el nombre de su departamento..."]) !!}
                            </div>
                            @error('department')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1 md:mr-10">
                            <div class="flex justify-center">
                                {!! Form::label("flat", "Piso", ["class" => "text-gray-900"]) !!}
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::select("flat", $formularioPiso, null, ["class" => "w-72 mx-10 md:w-40 lg:w-72", "placeholder" => "Ingrese su piso"]) !!}
                            </div>
                            @error('flat')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3">
                            <div class="flex justify-center">
                                {!! Form::label("cpl", "Codigo postal", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::number("cpl", null, ["class" => "w-72 mx-10 md:w-72 lg:w-96 rounded-full", "placeholder" => "Ingrese el codigo postal..."]) !!}
                            </div>
                            @error('cpl')
                                <small class="col-span-3 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3">
                            <div class="flex justify-center md:justify-start">
                                {!! Form::label("province", "Provincia", ["class" => "text-gray-900 mx-10 flex justify-center md:justify-start lg:justify-start"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                        </div>
                        <div class="flex justify-center mb-10 col-span-3">
                            {!! Form::select("province", $formularioProv, null, ["class" => "w-72 md:w-full lg:w-full mx-10", "placeholder" => "Ingrese su provincia", "required"]) !!}
                        </div>
                        @error('province')
                            <small class="col-span-3 relative bottom-10 text-red-600 mx-10 flex justify-center md:justify-start lg:justify-start">{{$message}}</small>
                        @enderror
                        <div class="col-span-3">
                            <div class="flex justify-center md:justify-start">
                                {!! Form::label("city", "Localidad", ["class" => "text-gray-900 mx-10 flex justify-center md:justify-start lg:justify-start"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                        </div>
                        <div class="flex justify-center mb-10 col-span-3">
                            {!! Form::select("city", $formularioCiudad, null, ["class" => "w-72 md:w-full lg:w-full mx-10", "placeholder" => "Ingrese su localidad", "required"]) !!}
                        </div>
                        @error('city')
                            <small class="col-span-3 relative bottom-10 text-red-600 mx-10 flex justify-center md:justify-start lg:justify-start">{{$message}}</small>
                        @enderror
                    </div>

                    <hr class="h-1 mx-8 bg-gray-300">

                    <div class="float-right mx-10"><span><b class="text-blue-600">*Campos obligatorios "Quiero que lo envien "</b></span></div><br>
                    <div class="float-right mx-10"><span><b class="text-red-600">*Campos obligatorios "Lo retiro yo"</b></span></div>
                    <h4 class="text-gray-900 text-center text-xl leading-4 font-bold py-6 mx-10 mt-10 md:mt-4 lg:mt-0">¿Como querés pagar tu compra?</h4>
                    <div class="grid grid-cols-3 mx-8 bg-gray-200 py-4">
                        <div class="flex justify-center col-span-3">
                            <p class="text-gray-900 text-center font-bold px-4 py-2">Elige la forma de pago <span class="text-blue-600"><b>*</b></span><span class="text-red-600"><b>*</b></span></p>
                        </div>
                        <div class="col-span-3 mb-4">
                            <div class="grid grid-cols-3">
                                <div class="flex col-span-3 mb-4 justify-center md:col-span-1 md:mb-0">
                                    <label class="text-gray-900 flex items-center">
                                        {!! Form::radio("payment", 1, null) !!}
                                        <img class="w-20 h-12 ml-2" src="{{URL("vendor\adminlte\dist\img\avisa_logo.png")}}" alt="">
                                            {{-- VISA --}}
                                    </label>
                                </div>
                                <div class="flex col-span-3 mb-4 justify-center md:col-span-1 md:mb-0">
                                    <label class="text-gray-900 flex items-center">
                                        {!! Form::radio("payment", 2, null) !!}
                                        <img class="w-20 h-12 ml-2" src="{{URL("vendor\adminlte\dist\img\mastercard.png")}}" alt="">
                                            {{-- Master Card --}}
                                    </label>
                                </div>
                                <div class="flex col-span-3 justify-center md:col-span-1">
                                    <label class="text-gray-900 flex items-center">
                                        {!! Form::radio("payment", 3, null) !!}
                                            <img class="w-20 h-12 ml-2" src="{{URL("vendor\adminlte\dist\img\bvisadebito.png")}}" alt="">
                                            {{-- VISA DEBITO --}}
                                    </label>
                                </div>
                            </div>
                            @error('payment')
                                <small class="col-span-3 text-red-600 text-center mt-4 mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <hr class="h-1 mx-8 mt-6 bg-gray-300">

                    <div class="float-right mx-10"><span><b class="text-blue-600">*Campos obligatorios "Quiero que lo envien "</b></span></div><br>
                    <div class="float-right mx-10"><span><b class="text-red-600">*Campos obligatorios "Lo retiro yo"</b></span></div>
                    <h5 class="text-gray-900 text-center text-xl leading-4 font-bold py-6 mx-10 mt-10 md:mt-4 lg:mt-0">Datos del titular del medio de pago</h5>
                    <div class="grid grid-cols-3">
                        <div class="col-span-3 md:col-span-1 md:ml-10">
                            <div class="flex justify-center">
                                {!! Form::label("name", "Nombre", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::text("name", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su nombre completo..."]) !!}
                            </div>
                            @error('name')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("surname", "Apellido", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::text("surname", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su apellido completo..."]) !!}
                            </div>
                            @error('surname')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1 md:mr-10">
                            <div class="flex justify-center">
                                {!! Form::label("dni", "DNI", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::number("dni", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su dni..."]) !!}
                            </div>
                            <div class="flex justify-center">
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-zinc-400 text-center mx-10 flex justify-center">Sin punto ni espacios. Ej. 45566245</small>
                            </div>
                            @error('dni')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1 md:ml-10">
                            <div class="flex justify-center">
                                {!! Form::label("phone", "Telefono", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::number("phone", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su numero telefonico..."]) !!}
                            </div>
                            @error('phone')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("email", "Correo electronico", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::email("email", null, ["class" => "w-72 mx-10 md:w-40 lg:w-72 rounded-full", "placeholder" => "Ingrese su correo electronico..."]) !!}
                            </div>
                            @error('email')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-3 md:col-span-1 md:mr-10">
                            <div class="flex justify-center">
                                {!! Form::label("birth", "Fecha de nacimiento", ["class" => "text-gray-900 mx-10 flex justify-center"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::date("birth", "Fecha de nacimiento", ["class" => "w-72 mx-10 text-center flex rounded-full"]) !!}
                            </div>
                            @error('birth')
                                <small class="col-span-3 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <hr class="h-1 mx-8 bg-gray-300">

                    <div class="float-right mx-10"><span><b class="text-blue-600">*Campos obligatorios "Quiero que lo envien "</b></span></div><br>
                    <div class="float-right mx-10"><span><b class="text-red-600">*Campos obligatorios "Lo retiro yo"</b></span></div>
                    <h6 class="text-gray-900 text-center text-xl leading-4 font-bold py-6 mx-10 mt-10 md:mt-4 lg:mt-0">Por favor, proporcione los datos del pago</h6>
                    <div class="grid grid-cols-2">
                        <div class="col-span-2">
                            <div class="flex justify-center">
                                {!! Form::label("headline", "Titular", ["class" => "text-gray-900"]) !!}
                                <span class="text-blue-600 relative left-1"><b>*</b></span>
                                <span class="text-red-600 relative left-1"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::text("headline", null, ["class" => "w-72 mx-10 md:w-72 lg:w-96 rounded-full", "placeholder" => "Ingrese el nombre del titular..."]) !!}
                            </div>
                            @error('headline')
                                <small class="col-span-2 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <div class="flex justify-center"> 
                                {!! Form::label("numberT", "Número de tarjeta", ["class" => "text-gray-900 mx-10 flex justify-center md:justify-start lg:justify-start"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10">
                                {!! Form::number("numberT", null, ["class" => "w-72 md:w-full lg:w-full mx-10 rounded-full", "placeholder" => "Ingrese el número de su tarjeta..."]) !!}
                            </div>
                            @error('numberT')
                                <small class="col-span-2 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("codeS", "Codigo de seguridad", ["class" => "text-gray-900 mx-10 flex justify-center"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                            <div class="flex justify-center col-span-2 mb-10">
                                {!! Form::number("codeS", null, ["class" => "w-72 md:w-full lg:w-full mx-10 rounded-full", "placeholder" => "Ingrese el codigo de seguridad..."]) !!}
                            </div>
                            @error('codeS')
                                <small class="col-span-2 md:col-span-1 relative bottom-10 mt-6 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("validM", "Valido hasta (mes)", ["class" => "text-gray-900 mx-10 flex justify-center md:justify-start lg:justify-start"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10 col-span-3">
                                {!! Form::select("validM", $validoM, null, ["class" => "w-72 md:w-full lg:w-full mx-10", "placeholder" => "Ingrese la validación", "required"]) !!}
                            </div>
                            @error('validM')
                                <small class="col-span-2 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <div class="flex justify-center">
                                {!! Form::label("validA", "Valido hasta (año)", ["class" => "text-gray-900 mx-10 flex justify-center"]) !!}
                                <span class="text-blue-600 relative right-9"><b>*</b></span>
                                <span class="text-red-600 relative right-9"><b>*</b></span>
                            </div>
                            <div class="flex justify-center mb-10 col-span-3">
                                {!! Form::select("validA", $validoA, null, ["class" => "w-72 md:w-full lg:w-full mx-10", "placeholder" => "Ingrese la validación", "required"]) !!}
                            </div>
                            @error('validA')
                                <small class="col-span-2 md:col-span-1 relative bottom-10 text-red-600 text-center mx-10 flex justify-center">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <hr class="h-1 mx-8 bg-gray-300">

                    <div class="grid grid-cols-7 mx-8 my-10">
                        <div class="flex justify-center items-center col-span-7 md:col-span-2 lg:col-span-1">
                            {{-- <img class="w-36 h-32 bg-red-500 table__productos" src="#" alt=""> --}}
                            <figure class="mb-4">
                                @if ($repuesto->image)
                                    <img class="w-48 h-36 object-contain object-center card-img-top img" src="{{Storage::url($repuesto->image->url)}}" alt="" id="img">
                                @else
                                    <img class="w-36 h-32 object-contain object-center" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
                                @endif
                            </figure> 
                        </div>
                        <div class="col-span-7 mb-6 md:col-span-2 md:ml-3 lg:col-span-2 lg:ml-4">
                            <h2 class="text-gray-900 text-2xl leading-6 font-bold mt-4 md:mt-0 lg:mt-0">{{$repuesto->name}}</h2>
                            <input type="text" value="{{$repuesto->name}}" readonly class="bg-zinc-100 w-56 md:w-96 text-gray-900 text-lg leading-4 font-bold mt-4 md:mt-0 lg:mt-0 hidden inputN" name="repuestoname">
                            <input type="text" value="{{$repuesto->marca->name}}" readonly class="bg-zinc-100 w-56 md:w-96 text-gray-900 text-lg leading-4 font-bold mt-4 md:mt-0 lg:mt-0 hidden inputN" name="repuestomarca">
                            <input type="text" value="{{$repuesto->modelo->name}}" readonly class="bg-zinc-100 w-56 md:w-96 text-gray-900 text-lg leading-4 font-bold mt-4 md:mt-0 lg:mt-0 hidden inputN" name="repuestomodelo">
                            <input type="text" value="{{$repuesto->categoria->name}}" readonly class="bg-zinc-100 w-56 md:w-96 text-gray-900 text-lg leading-4 font-bold mt-4 md:mt-0 lg:mt-0 hidden inputN" name="repuestocategoria">
                            <div class="bg-blue-100 w-32 rounded-2xl mt-4">
                                @if ($repuesto->price == "1.000" || $repuesto->price == "2.000" || $repuesto->price == "3.000" || $repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "9.000" ||$repuesto->price == "10.000" || $repuesto->price == "11.000" || $repuesto->price == "13.000" || $repuesto->price == "15.000" || $repuesto->price == "16.000" || $repuesto->price == "18.000" || $repuesto->price == "20.000" || $repuesto->price == "21.000")
                                    <p class="text-blue-500 text-center text-sm font-medium leading-4 py-1">Llega mañana</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex justify-center mb-6 items-center col-span-7 md:col-span-1 lg:col-span-2">
                            <div class="table__cantidad">
                                <input class="ml-2 w-16 rounded-lg" name="cantidad" id="valor1" type="number" min = "1" max="5" value="1" oninput="calcular()">
                                {{-- <button class="text-sm text-white font-bold ml-8 px-4 h-11 bg-red-600 hover:bg-red-500 rounded-lg" class="delete">X</button> --}}
                            </div>
                        </div>
                        <div class="flex justify-end items-center mb-6 col-span-7 md:col-span-2 lg:col-span-2">
                            <div>
                                @if ($repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "10.000" || $repuesto->price == "12.000" || $repuesto->price == "13.000" || $repuesto->price == "16.000" ||  $repuesto->price == "18.000" || $repuesto->price == "21.000")
                                <p class="text-gray-400 line-through mb-1 ml-16">
                                    @php
                                        $priceO = $repuesto->price + 2.500;
                                        $resta = $priceO;
                                        echo("$" . $resta . "00");
                                    @endphp
                                </p>
                                <div class="flex">
                                    <span class="text-base text-blue-500 mr-2">25%off</span>
                                    <p class="text-gray-900 text-xl leading-4 font-bold">$<b id="precio" value="{{$repuesto->price}}" oninput="calcular()">{{$repuesto->price}}</b></p>
                                    <input class="w-40 rounded-lg hidden" name="precio" id="precio" type="number" value="{{$repuesto->price}}" oninput="calcular()">
                                </div>
                                @else
                                    <p class="text-gray-900 text-xl leading-4 font-bold">$<b id="precio" value="{{$repuesto->price}}" oninput="calcular()">{{$repuesto->price}}</b></p>
                                    <input class="w-40 rounded-lg hidden" name="precio" id="precio" type="number" value="{{$repuesto->price}}" oninput="calcular()">
                                @endif
                                {{-- <p class="text-gray-900 text-xl leading-4 font-bold">Precio: $<b id="precio" value="{{$repuesto->price}}" oninput="calcular()">{{$repuesto->price}}</b></p>
                                <input class="w-40 rounded-lg hidden" name="precio" id="precio" type="number" value="{{$repuesto->price}}" oninput="calcular()"> --}}
                            </div>
                        </div>
                        <div class="col-span-7 flex justify-end w-full">
                            <h3 class="itemCartTotal text-gray-900 text-2xl leading-4 font-bold" id="total">TOTAL: $<b id="total">{{$repuesto->price}}</b></h3>
                        </div>
                    </div>

                    <hr class="h-1 mx-8 bg-gray-300">

                    <div class="my-6 flex justify-center">
                        {!! Form::submit("Realizar la compra", ["class" => "text-white text-center w-52 bg-blue-700 hover:bg-blue-600 py-2 rounded-3xl font-bold cursor-pointer"]) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="w-screen relative">
        <div class="bg-gray-900 fixed top-0 left-0 right-0">
            <x-card-heederLogo />
        </div>
    </div>
    {{-- Color de los bordes de los input --}}
    <style>
        .inputN{
            outline: none;
            border: 0;
        }
        .inputN:focus{
            outline-offset: -4px;
            outline: 8px solid rgb(244, 0, 245);
        }
    </style>
    {{-- Precio total --}}
    <script>
        function calcular(){
            try{
                var a = parseFloat(document.getElementById("valor1").value) || 0;
                console.log(a);
                b = parseFloat(document.getElementById("precio").textContent);
                console.log(b);
                var total = document.getElementById("total").textContent ="TOTAL: $" + a * b + ".000";
                console.log(total);
            }catch(e){}
        }
    </script>
</x-guest-layout>