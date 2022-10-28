<x-app-layout>

    <x-card-carrusel />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <h1 class="text-4xl text-center text-blue-700 leading-8 font-bold font-mono mb-8"><strong class="uppercase leading-8">Ofertas semanales</strong></h1>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center pb-10 bg-white px-4">
            @foreach ($repuestos as $repuesto)
                <article class="w-56 h-60 bg-contain bg-no-repeat bg-center my-8 mb-28 border" style="background-image: url(@if ($repuesto->image) {{Storage::url($repuesto->image->url)}} @else https://tekoha.com.ar/wp-content/uploads/2020/12/AUDI-10.jpg @endif)">
                    <div class="w-full px-4 py-2 flex flex-col justify-center hover:shadow-zinc-400 bg-white shadow-lg overflow-hidden relative top-60 border">
                        @if ($repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "10.000" || $repuesto->price == "12.000" || $repuesto->price == "13.000" || $repuesto->price == "16.000" ||  $repuesto->price == "18.000" || $repuesto->price == "21.000")
                        <p class="text-gray-400 line-through mb-1">
                            {{-- <a href="{{route("repuestos.show", $repuesto)}}">
                                ${{$repuesto->price}}
                            </a> --}}
                            @php
                                $priceO = $repuesto->price + 2.500;
                                $resta = $priceO;
                                echo("$" . $resta . "00");
                            @endphp
                        </p>
                        <p class="text-gray-900 text-2xl leading-4 font-bold">
                            <a href="{{route("repuestos.show", $repuesto)}}"> 
                                ${{$repuesto->price}}
                                <span class="text-base text-blue-500 ml-2">25%off</span>
                            </a>
                        </p>
                        @else
                        <p class="text-gray-900 text-2xl leading-4 font-bold py-4">
                            <a href="{{route("repuestos.show", $repuesto)}}"> 
                                ${{$repuesto->price}}
                            </a>
                        </p>
                        @endif
                        <p class="text-gray-400 leading-4 font-bold pt-1 pb-4">
                            <a href="{{route("repuestos.show", $repuesto)}}">
                                {{$repuesto->name}}
                            </a>
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    <div class="bg-white mt-4 shadow-lg mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 justify-items-center pb-4">
            <div>
                <img class="w-28 h-28 relative left-24" src="{{URL("vendor\adminlte\dist\img\atarjeta.png")}}" alt="">
                <h1 class="text-2xl text-center text-gray-900 py-2 font-semibold">Elegí como pagar</h1>
                <p class="text-gray-900 text-center leading-5 relative right-1">Podes pagar con tarjeta VISA, Master Card<br> y con VISA DEBITO. <br>¡Y siempre es seguro!</p>
            </div>
            <div>
                <img class="w-28 h-28 relative left-20" src="{{URL("vendor\adminlte\dist\img\caja.png")}}" alt="">
                <h1 class="text-2xl text-center text-gray-900 py-2 font-semibold">Envío rápido y seguro</h1>
                <p class="text-gray-900 text-center leading-5">Al estar registrado en Barkalí su compra<br> siempre sera recibida. <br> Todos sus paquetes estarán protegidos.</p>
            </div>
            <div>
                <img class="w-28 h-28 relative left-20 md:left-20 lg:left-20" src="{{URL("vendor\adminlte\dist\img\compra-protegida.png")}}" alt="">
                <h1 class="text-2xl text-center text-gray-900 py-2 font-semibold relative right-2">Compra protegida</h1>
                <p class="text-gray-900 text-center leading-5 relative right-1">Tus compras siempre estaran protegidas. <br>Y si no es lo que esperabas,<br> aceptamos devoluciones.</p>
            </div>
        </div>
    </div>

    <x-card-footer />
</x-app-layout>