<x-app-layout>
    <div class="container mx-auto py-12">
        <div class="bg-white shadow-lg px-4 mx-8 sm:px-6 lg:px-8 lg:mx-20">
            <div class="flex justify-end pb-10 pt-2">
                <a href="/" class="underline text-gray-900 hover:text-blue-600 text-sm">Hacer más compras</a>
            </div>
            <div class="pb-4">
                <h1 class="text-gray-900 text-3xl leading-4 font-bold">Tu carrito</h1>
            </div>
            <hr class="bg-gray-300 mb-6">


            <div class="grid grid-cols-7 mb-6 tbody">
                <div class="flex justify-center items-center col-span-7 md:col-span-1 lg:col-span-1">
                    {{-- <img class="w-36 h-32 bg-red-500 table__productos" src="#" alt=""> --}}
                    <figure>
                        @if ($repuesto->image)
                            <img class="w-36 h-32 object-cover object-center card-img-top img" src="{{Storage::url($repuesto->image->url)}}" alt="" id="img">
                        @else
                            <img class="w-36 h-32 object-cover object-center" src="{{URL("vendor\adminlte\dist\img\Afoto-no-disponiblle.jpg")}}" alt="">
                        @endif
                    </figure> 
                </div>
                <div class="col-span-7 md:col-span-2 md:ml-4 lg:col-span-2 lg:ml-4">
                    <h2 class="text-gray-900 text-2xl leading-4 font-bold mt-4 md:mt-0 lg:mt-0 table__nombres">{{$repuesto->name}}</h2>
                    <div class="bg-blue-100 w-32 rounded-2xl mt-4">
                        <p class="text-blue-500 text-center text-sm font-medium leading-4 py-1">Llega mañana</p>
                    </div>
                </div>
                <div class="flex justify-center items-center col-span-3 md:col-span-2 lg:col-span-2">
                    <div class="table__cantidad">
                        <input class="w-16 rounded-lg" type="number" min = "1" value="1">
                        <button class="text-sm text-white font-bold ml-8 px-4 h-11 bg-red-600 hover:bg-red-500 rounded-lg" class="delete">X</button>
                    </div>
                </div>
                <div class="flex justify-end items-center col-span-4 md:col-span-2 lg:col-span-2">
                    <div>
                        <p class="text-gray-900 text-2xl leading-4 font-bold table__price">${{$repuesto->price}}</p>
                    </div>
                </div>
            </div>

            <hr class="bg-gray-300 mb-6">

            {{-- <div>
                <h2 class="text-gray-400 text-2xl text-center font-medium leading-4 pt-20 pb-4">Tu carrito está vacío</h2>
                <p class="text-gray-400 text-center leading-4 pb-4">Enpieza a llenar tu carrito con nuestros repuesto</p>
                <a class="text-blue-700 text-center leading-4 py-2 block" href="/">Ir de Compras</a>
            </div> --}}

            <div class="flex justify-start w-full pb-6">
                <h3 class="itemCartTotal text-gray-900 text-2xl leading-4 font-bold">TOTAL: {{$repuesto->price}}</h3>
            </div>
            <div class="flex justify-end w-full pb-6">
                <div class="rounded-3xl">
                    <a href="{{route("repuestos.formulario")}}"  class="text-white text-center block bg-blue-700 hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">Continuar la compra</a>
                </div>
            </div>
        </div>
    </div>

    <x-card-footer />
</x-app-layout>