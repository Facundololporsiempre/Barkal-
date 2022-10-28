<x-app-layout>
    <div class="py-8 mx-20 mt-5 mb-5 bg-white shadow-lg px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="col-span-3 md:col-span-2 lg:col-span-2">
                <figure>
                    @if ($repuesto->image)
                        <img class="w-full h-96 object-contain object-center card-img-top img" src="{{Storage::url($repuesto->image->url)}}" alt="" id="img">
                    @else
                        <img class="w-full h-96 object-cover object-center" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
                    @endif
                </figure> 
            </div>


            <div class="col-span-3 md:col-span-1 lg:col-span-1" id="lista-productos">
                    <h1 class="card-title text-3xl text-gray-900 font-bold mb-2 nombre" id="nombre">{{$repuesto->name}}</h1>
                    {{-- <h1 class="card-title text-3xl text-gray-900 font-bold mb-2 nombre" id="nombre">{{$repuesto->name}}</h1> --}}
                    <div>
                        <p class="text-gray-900 text-sm">Marca del vehiculo: <b>{{$repuesto->marca->name}}</b></p>
                    </div>
                    <div>
                        <p class="text-gray-900 text-sm">Modelo del vehiculo: <b>{{$repuesto->modelo->name}}</b></p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-900 text-sm">Categoria: <b>{{$repuesto->categoria->name}}</b></p></p>
                    </div>
                    <div class="mb-2">
                        @if ($repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "10.000" || $repuesto->price == "12.000" || $repuesto->price == "13.000" || $repuesto->price == "16.000" ||  $repuesto->price == "18.000" || $repuesto->price == "21.000")
                            <p class="text-gray-400 text-sm line-through mb-2">
                                @php
                                    $priceO = $repuesto->price + 2.500;
                                    $resta = $priceO;
                                    echo("$" . $resta . "00");
                                @endphp
                            </p>
                            <p class="text-3xl font-bold leading-4 text-gray-900">
                                ${{$repuesto->price}}
                                <span class="text-base text-blue-500 ml-2">25%off</span>
                            </p>
                        @else
                            <p class="text-gray-900 text-3xl leading-4 font-bold mb-4 precio" id="precio">${{$repuesto->price}}</p>
                        @endif
                    </div>

                    <div class="bg-blue-100 w-32 rounded-2xl">
                        @if ($repuesto->price == "1.000" || $repuesto->price == "2.000" || $repuesto->price == "3.000" || $repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "9.000" ||$repuesto->price == "10.000" || $repuesto->price == "11.000" || $repuesto->price == "13.000" || $repuesto->price == "15.000" || $repuesto->price == "16.000" || $repuesto->price == "18.000" || $repuesto->price == "20.000" || $repuesto->price == "21.000")
                            <p class="text-blue-500 text-center text-sm font-medium leading-4 py-1">Llega mañana</p>
                        @endif
                    </div>
                    <div>
                        <p class="font-medium text-gray-900 mb-2 md:mb-2 lg:mb-0 stock" id="stock"><span class="font-medium text-gray-900 mb-2 md:mb-2 lg:mb-0">Stock disponible: </span>{{$repuesto->stock}}</p>
                    </div>
                    <div class="container flex justify-center rounded-3xl lg:mt-4 relative lg:top-24">
                        @if (auth()->user())
                            {{-- <a href="{{route("repuestos.formulario")}}" class="text-blue-500 w-80 text-center block bg-blue-100 hover:bg-blue-200 px-3 py-2 rounded-3xl font-semibold agregar-carrito">Agregar al carrito</a> --}}
                            <a href="{{route("repuestos.formulario", $repuesto)}}" class="text-white w-80 text-center block bg-blue-700 hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">COMPRAR</a>
                        @else 
                            {{-- <a href="{{route("repuestos.restrinsion", $repuesto)}}" class="text-blue-500 w-80 text-center block bg-blue-100 hover:bg-blue-200 px-3 py-2 rounded-3xl font-semibold">Agregar al carrito</a> --}}
                            <a href="{{route("repuestos.restrinsion", $repuesto)}}" class="text-white w-80 text-center block bg-blue-700 hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">COMPRAR</a>
                        @endif
                    </div>
                </div>

                <div class="col-span-3 md:col-span-2 lg:col-span-2 text-base text-gray-500">
                    <h2 class="text-2xl text-gray-900 mt-4 mb-8">Repuestos relacionados</h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 justify-center">
                        @if ($marcaSimilares->count())
                        @foreach ($marcaSimilares as $marcaSimilar)
                            <li class="mb-4 border">
                                <div class="flex justify-center">
                                    <a class="w-48 flex justify-center" href="{{route("repuestos.show", $marcaSimilar)}}">
                                        @if ($marcaSimilar->image)
                                            <img class="w-48 h-48 object-cover object-center my-4" src="{{Storage::url($marcaSimilar->image->url)}}" alt="">
                                        @else
                                            <img class="w-48 h-48 object-cover object-center my-4" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
                                        @endif
                                    </a>
                                </div>
                                @if ($marcaSimilar->price == "5.000" || $marcaSimilar->price == "6.000" || $marcaSimilar->price == "8.000" || $repuesto->price == "10.000" || $marcaSimilar->price == "12.000" || $marcaSimilar->price == "13.000" || $marcaSimilar->price == "16.000" ||  $marcaSimilar->price == "18.000" || $marcaSimilar->price == "21.000")
                                <p class="text-gray-400 line-through px-8 mb-1">
                                    <a href="{{route("repuestos.show", $marcaSimilar)}}" class="flex justify-center">
                                        ${{$marcaSimilar->price}}
                                    </a>
                                </p>
                                <p class="text-gray-900 text-2xl leading-4 font-bold mb-1">
                                    <a href="{{route("repuestos.show", $marcaSimilar)}}" class="flex justify-center">
                                        @php
                                            $priceO = $marcaSimilar->price - 1.000;
                                            $resta = $priceO - 2.001;
                                            echo("$" . $resta);
                                        @endphp
                                    <span class="text-base text-blue-500 ml-2">30%off</span>
                                    </a>
                                </p>
                                @else
                                    <p class="text-gray-900 text-2xl leading-4 font-bold mb-3 px-8">
                                        <a href="{{route("repuestos.show", $marcaSimilar)}}" class="flex justify-center">
                                            ${{$marcaSimilar->price}}
                                        </a>
                                    </p>
                                @endif
                                <a href="{{route("repuestos.show", $marcaSimilar)}}" class="mb-8 flex justify-center">
                                    <p class="text-gray-400 text-center w-68 leading-4 font-bold pb-3">{{$marcaSimilar->name}}</p>
                                </a>
                            </li>
                        @endforeach
                        @else
                            <div class="bg-gray-200 border border-black w-full mx-0 md:mx-36 lg:mx-56 my-4 flex justify-center rounded-lg mb-12">
                                <div class="flex items-center">
                                    <strong><p class="flex items-center text-center text-lg h-20 bg-gray-200 rounded-lg px-2 py-2">No hay otros repuestos relacionados </p></strong>
                                </div>
                            </div>
                        @endif
                    </ul>
                    <div class="mb-3">
                        <h2 class="text-2xl text-gray-900">Descripción del repuesto</h2>
                    </div>
                    <div>
                        <p class="text-gray-900 leading-4">{{$repuesto->description}}</p>
                    </div>
                </div>
        </div>
    </div>

    <x-card-footer />
</x-app-layout>
