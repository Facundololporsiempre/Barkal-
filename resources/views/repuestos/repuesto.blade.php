<x-app-layout>
    @if ($repuestos->count())
    <div class="bg-zinc-200 py-16">
        <div class="grid grid-cols-4">
            <div class="col-span-4 order-1 mb-6 md:col-span-1 md:order-2 mx-4 md:ml-10 lg:ml-20">
                <div class="mb-10">
                    <h1 class="text-gray-900 text-4xl leading-8 font-medium">Repuesto que ofrecemos</h1>
                    <p class="text-gray-400 text-sm leading-4 pt-3">{{$cantidad}} Resultados</p>
                </div>
                <div class="mb-10">
                    <h3 class="text-gray-900 leading-4 font-medium">Tiempo de entrega</h3>
                    <p class="text-gray-400 text-sm leading-4 pt-2">Llegan en menos de 24 hs</p>
                </div>
                <div>
                    <form action="{{route("repuestos.repuesto")}}" method="get">
                        @csrf
                        <div class="mb-1">
                            <label class="text-gray-900 leading-4 font-medium">Precio a buscar</label>
                        </div>
                        <div class="flex">
                            <input class="w-32 rounded-l-lg text-sm" max="100" type="text" name="price" value="{{$price}}" placeholder="Ingrese el precio" autocomplete="off">
                            <input type="submit" value="Buscar" class="cursor-pointer rounded-r-lg text-white text-center w-16 bg-blue-700 hover:bg-blue-600 p-2  font-bold">
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex col-span-4 order-2 md:col-span-3 bg-white mx-4 md:mx-12 lg:mx-32">
                <div class="grid grid-cols-4">
                    @foreach ($repuestos as $repuesto)
                        <div class="flex col-span-1 my-2 md:col-span-1 items-center w-full">
                            @if ($repuesto->image)
                                <img class="w-full h-40 m-3 object-contain object-center" src="{{Storage::url($repuesto->image->url)}}" alt="">
                            @else
                                <img class="w-full h-40 m-3 object-contain object-center" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
                            @endif
                        </div>
                        <div class="col-span-3 ml-8 md:col-span-3 md:ml-8 my-3 leading-8 lg:ml-8">
                            <h1 class="text-gray-900 text-xl leading-8 font-medium">
                                <a href="{{route("repuestos.show", $repuesto)}}"> 
                                    {{$repuesto->name}}
                                </a>
                            </h1>
                            @if ($repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "10.000" || $repuesto->price == "12.000" || $repuesto->price == "13.000" || $repuesto->price == "16.000" ||  $repuesto->price == "18.000" || $repuesto->price == "21.000")
                                <p class="text-gray-400 text-sm line-through">
                                    <a href="{{route("repuestos.show", $repuesto)}}">
                                        @php
                                            $priceO = $repuesto->price + 2.500;
                                            $resta = $priceO;
                                            echo("$" . $resta . "00");
                                        @endphp
                                    </a>
                                </p>
                                <p class="text-gray-900 text-xl leading-4 font-bold">
                                    <a href="{{route("repuestos.show", $repuesto)}}">
                                        ${{$repuesto->price}}
                                    </a>
                                    <span class="text-base text-blue-500 ml-2">25%off</span>
                                </p>
                            @else
                                <p class="text-gray-900 text-xl leading-4 font-bold">
                                    <a href="{{route("repuestos.show", $repuesto)}}"> 
                                        ${{$repuesto->price}}
                                    </a>
                                </p>
                            @endif
                            <div class="bg-blue-100 w-32 rounded-2xl mt-2">
                                @if ($repuesto->price == "1.000" || $repuesto->price == "2.000" || $repuesto->price == "3.000" || $repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "8.000" || $repuesto->price == "9.000" || $repuesto->price == "10.000" || $repuesto->price == "11.000" || $repuesto->price == "13.000" || $repuesto->price == "15.000" || $repuesto->price == "16.000" || $repuesto->price == "18.000" || $repuesto->price == "20.000" || $repuesto->price == "21.000")
                                    <p class="text-blue-500 text-center text-sm font-medium leading-4 py-1">Llega mañana</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-span-4 relative left-0 md:left-0 lg:left-0 w-full">
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="bg-white grid grid-cols-2 p-6 mx-8 md:mx-32 lg:mx-60 my-16 rounded-lg">
            <div class="flex justify-center col-span-2 md:col-span-1">
                <img src="{{URL("vendor\adminlte\dist\img\searc.png")}}" class="w-28 h-28" alt="">
            </div>
            <div class="col-span-2 md:col-span-1 flex md:items-center">
                <strong><p class="text-center md:text-left text-2xl">No sea encontrado el repuesto que buscas</p></strong>
            </div>
            <div class="col-span-2 md:col-span-1">
            </div>
            <div class="col-span-2 md:col-span-1">
                <ul>
                    <li class="text-gray-900 text-sm mb-2">-No se ha encontrado el repuesto que buscas.</li>
                    <li class="text-gray-900 text-sm mb-2">-Escribe los numeros correctamente.</li>
                    <li class="text-gray-900 text-sm">-Navegá por las categorías para encontrar un repuesto similar.</li>
                </ul>
            </div>
        </div>
    @endif
    
    <x-card-footer />
</x-app-layout>