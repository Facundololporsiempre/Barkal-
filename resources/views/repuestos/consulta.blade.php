<x-app-layout>
    <div class="container mx-auto px-10 md:px-20 lg:px-32 py-10">
        <div class="bg-white shadow-lg mx-0 px-6 md:mx-6 md:px-6 lg:mx-24 lg:px-6 xl:mx-48 xl:px-6">
            <div>
                <h1 class="text-center pt-8 pb-4 text-4xl text-gray-900">Contactos</h1>
                <p class="text-center text-2xl text-gray-900 mb-6">Comunícate con nosotros desde:</p>
            </div>
            <div class="flex justify-around">
                <img class="relative left-4 w-28 h-28" src="{{URL("vendor\adminlte\dist\img\atelefono.png")}}" alt="">
                <img class="w-28 h-28 relative left-5 md:left-5" src="{{URL("vendor\adminlte\dist\img\carta.png")}}" alt="">
            </div>
            <div class="flex justify-around">
                <p class="text-center text-gray-900">54-3794046207 <br>
                    Lunes a viernes 7:30 a 20:00 <br> y Sábados 7:30 a 12:30</p>
                <p class="text-center text-gray-900">barkalicorrientes<br>@gmail.com.</p>
            </div>
            <div class="mt-6">
                <p class="text-center text-2xl text-gray-900">Deje su consulta y en menos de 48hs un agente de <br> nuestra empresa se contactará con usted</p>
            </div>
            <div class="float-right mb-1 mt-3 mx-2"><span class="text-blue-600"><b>*Campos obligatorios</b></span></div>
            <br>
            <div>
                {!! Form::open(["route" => "repuestos.store"]) !!}
                    <div class="mt-4 flex justify-center">
                        {!! Form::label("name", "Nombre", ["class" => "text-gray-900 text-xl"]) !!}
                        <span class="text-blue-600"><b>*</b></span>
                    </div>
                    <div class="flex justify-center">
                        {!! Form::text("name", null, ["class" => "w-96 rounded-full text-center", "placeholder" => "Ingrese su nombre"]) !!}
                    </div>
                    @error('name')
                        <small class="text-red-600 flex justify-center">{{$message}}</small>
                    @enderror
                    <div class="mt-4 flex justify-center">
                        {!! Form::label("phone", "Telefono", ["class" => "text-gray-900 text-xl"]) !!}
                    </div>
                    <div class="flex justify-center">
                        {!! Form::number("phone", null, ["class" => "w-96 rounded-full text-center", "placeholder" => "Ingrese su numero telefonico"]) !!}
                    </div>
                    @error('phone')
                        <small class="text-red-600 flex justify-center">{{$message}}</small>
                    @enderror
                    <div class="mt-4 flex justify-center">
                        {!! Form::label("email", "Correo electronico", ["class" => "text-gray-900 text-xl"]) !!}
                        <span class="text-blue-600"><b>*</b></span>
                    </div>
                    <div class="flex justify-center">
                        {!! Form::email("email", null, ["class" => "w-96 rounded-full text-center", "placeholder" => "Ingrese su correo electronico"]) !!}
                    </div>
                    @error('email')
                        <small class="text-red-600 flex justify-center">{{$message}}</small>
                    @enderror
                    <div class="mt-4 flex justify-center">
                        {!! Form::label("query", "Consulta", ["class" => "text-gray-900 text-xl"]) !!}
                        <span class="text-blue-600"><b>*</b></span>
                    </div>
                    <div class="flex justify-center">
                        {!! Form::textarea("query", null, ["class" => "w-96 rounded-lg text-center", "placeholder" => "Ingrese su consulta"]) !!}
                    </div>
                    @error('query')
                        <small class="text-red-600 flex justify-center">{{$message}}</small>
                    @enderror
                    <div class="mt-8 grid grid-cols-2">
                        <div class="col-span-2 flex justify-center pb-5">
                            {!! Form::submit("Enviar consulta", ["class" => "bg-blue-700 w-40 text-white hover:bg-blue-600 hover:text-zinc-200 px-3 py-2 rounded-full font-bold cursor-pointer"]) !!}
                        </div>
                        <div class="col-span-2 flex justify-end pb-3">
                            <a href="{{route("repuestos.consultaP")}}" class="underline text-gray-900 hover:text-blue-600 text-sm">Ver consultas hechas por otras personas</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-card-footer />
</x-app-layout>