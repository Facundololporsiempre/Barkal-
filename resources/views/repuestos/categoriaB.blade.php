<x-app-layout>
@if ($repuestos->count())
<div class="bg-zinc-200 py-16">
    <div class="grid grid-cols-4">
        <div class="col-span-4 order-1 mb-6 md:col-span-1 md:order-2 mx-4 md:ml-12 lg:ml-20">
            <div class="mb-10">
                {{-- <h1 class="text-gray-900 text-4xl leading-8 font-medium">Repuesto encontrado</h1> --}}
                <h1 class="text-gray-900 text-4xl leading-8 font-medium">{{$searchB}}</h1>
                <p class="text-gray-400 text-sm leading-4 pt-3">{{$cantidad}} Resultados</p>
                {{-- <p class="text-gray-400 text-sm leading-4 pt-3">{{$cantidadP}} Resultados</p> --}}
            </div>
            <div class="mb-10">
                <h3 class="text-gray-900 leading-4 font-medium">Tiempo de entrega</h3>
                <p class="text-gray-400 text-sm leading-4 pt-2">Llegan en menos de 24 hs</p>
            </div>
            {{-- !!! NO BORRAR ESTO !!! --}}
            {{-- <div>
                <form action="{{route("repuestos.categoriaB")}}" method="get">
                    @csrf
                    <div class="mb-1">
                        <label class="text-gray-900 leading-4 font-medium">Precio a buscar</label>
                    </div>
                    <div class="flex">
                        <input class="w-28 rounded-l-lg" max="100" type="text" name="price" value="{{$price}}" placeholder="Ingrese el precio a buscar" autocomplete="off">
                        <input type="submit" value="Buscar" class="cursor-pointer rounded-r-lg text-white text-center w-16 bg-blue-700 hover:bg-blue-600 p-2  font-bold">
                    </div>
                </form>
            </div> --}}
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
                        @if ($repuesto->price == "21.000" || $repuesto->price == "22.000" || $repuesto->price == "24.000" || $repuesto->price == "25.000" ||  $repuesto->price == "26.000" || $repuesto->price == "27.000" || $repuesto->price == "28.000" || $repuesto->price == "29.000" || $repuesto->price == "30.000" || $repuesto->price == "33.000" || $repuesto->price == "37.000" || $repuesto->price == "43.000" || $repuesto->price == "45.000" || $repuesto->price == "50.000" || $repuesto->price == "51.000" || $repuesto->price == "54.000" || $repuesto->price == "61.000" || $repuesto->price == "64.000" || $repuesto->price == "67.000")
                            <p class="text-gray-400 text-sm line-through">
                                <a href="{{route("repuestos.show", $repuesto)}}">
                                    @php
                                        $priceO = $repuesto->price + 9.500;
                                        $resta = $priceO;
                                        echo("$" . $resta . "00");
                                    @endphp
                                </a>
                            </p>
                            <p class="text-gray-900 text-xl leading-4 font-bold">
                                <a href="{{route("repuestos.show", $repuesto)}}">
                                    ${{$repuesto->price}}
                                </a>
                                <span class="text-base text-blue-500 ml-2">13%off</span>
                            </p>
                        @else
                            <p class="text-gray-900 text-xl leading-4 font-bold">
                                <a href="{{route("repuestos.show", $repuesto)}}"> 
                                    ${{$repuesto->price}}
                                </a>
                            </p>
                        @endif
                        <div class="bg-blue-100 w-32 rounded-2xl mt-2">
                            @if ($repuesto->price == "1.000" || $repuesto->price == "2.000" || $repuesto->price == "3.000" || $repuesto->price == "4.000" || $repuesto->price == "5.000" || $repuesto->price == "6.000" || $repuesto->price == "7.000" || $repuesto->price == "8.000" || $repuesto->price == "9.000" || $repuesto->price == "10.000" || $repuesto->price == "11.000" || $repuesto->price == "13.000" || $repuesto->price == "14.000" || $repuesto->price == "15.000" || $repuesto->price == "16.000" || $repuesto->price == "18.000" || $repuesto->price == "20.000" || $repuesto->price == "21.000" || $repuesto->price == "23.000" || $repuesto->price == "27.000" || $repuesto->price == "29.000" || $repuesto->price == "30.000" || $repuesto->price == "32.000" || $repuesto->price == "34.000" || $repuesto->price == "37.000" || $repuesto->price == "39.000" || $repuesto->price == "46.000" || $repuesto->price == "49.000" || $repuesto->price == "50.000" || $repuesto->price == "51.000" || $repuesto->price == "59.000" || $repuesto->price == "67.000" || $repuesto->price == "68.000" || $repuesto->price == "69.000" || $repuesto->price == "76.000" || $repuesto->price == "82.000" || $repuesto->price == "83.000" || $repuesto->price == "112.000" || $repuesto->price == "115.000" || $repuesto->price == "118.000" || $repuesto->price == "126.000" || $repuesto->price == "143.000" || $repuesto->price == "171.000" || $repuesto->price == "253.000" || $repuesto->price == "272.000")
                                <p class="text-blue-500 text-center text-sm font-medium leading-4 py-1">Llega ma??ana</p>
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
    {{-- <div class="mt-8 mx-12">
        {{$repuestos->links()}}
    </div> --}}
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
                <li class="text-gray-900 text-sm my-2">-Revis?? la ortograf??a de la palabra.</li>
                <li class="text-gray-900 text-sm mb-2">-Utiliz?? palabras m??s gen??ricas o menos palabras.</li>
                <li class="text-gray-900 text-sm">-Naveg?? por las categor??as para encontrar un repuesto similar.</li>
            </ul>
        </div>
    </div>
@endif

    <x-card-footer />
</x-app-layout>