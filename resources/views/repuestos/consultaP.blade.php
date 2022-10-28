<x-app-layout>
    <div class="my-16 leading-8">
        @if ($consultaR->count())
        <h1 class="text-gray-900 text-center mb-8 text-3xl font-bold leading-8"><strong>Todas las consultas hechas por usuario</strong></h1>
        @foreach ($consultaR as $consulta)
        <div class="bg-white grid grid-cols-8 py-8 px-4 mx-4 md:mx-28 lg:mx-48">
            <div class="flex justify-center items-center col-span-1 md:col-span-1 lg:col-span-1">
                    <img class="h-16 w-16 rounded-full" src="{{URL("vendor\adminlte\dist\img\usuario.png")}}" alt="">
            </div>
            <div class="col-span-5 ml-4 md:col-span-5 md:ml-8 lg:col-span-6 lg:ml-2">
                <h2 class="text-2xl"><strong>Usuario: </strong>{{$consulta->name}}</h2>
                <p class="text-gray-900 text-sm my-2"><strong>Correo electronico: </strong>{{$consulta->email}}</p>
                <p class="text-gray-900 text-sm mt-2"><strong>Consulta: </strong>{{$consulta->query}}</p>
            </div>
            <div class="col-span-2 flex justify-center items-center md:col-span-2 lg:col-span-1">
                <div class="bg-blue-700 rounded-3xl">
                    <a href="{{route("repuestos.verConsulta", $consulta)}}" class="text-white text-center block hover:bg-blue-600 px-3 py-2 rounded-3xl font-medium">Ver consulta</a>
                </div>
            </div>
        </div>
        <hr class="mx-8 md:mx-32 lg:mx-48">
        @endforeach
        <div class="mt-8 flex justify-center">
            {{$consultaR->links()}}
        </div>
        @else
        <div class="bg-white h-48 mx-4 rounded-lg md:mx-28 lg:mx-48 my-20">
                <h2 class="text-gray-900 text-center mx-6 mb-10 pt-4 text-2xl font-bold leading-8">Actualmente no ahi ninguna consulta hecha por los usuarios</h2>
                <p class="text-gray-900 text-sm text-center my-2">¿Quieres hacer una consulta?</p>
                <div class="flex justify-center">
                    <a href="{{route("repuestos.consulta")}}" class="underline text-center text-gray-900 hover:text-blue-600 text-sm">Realizar una consulta</a>
                </div>
            </div>
        @endif
    </div>
    <x-card-footer />
</x-app-layout>