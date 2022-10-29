<x-app-layout>
    <div class="my-16 leading-8">
        <h1 class="text-gray-900 text-center mb-8 text-3xl font-bold leading-8"><strong>Repuesta para: {{$consulta->name}}</strong></h1>
        <div class="bg-white grid grid-cols-8 p-6 mx-8 md:mx-32 lg:mx-60 rounded-lg">
            <div class="col-span-1">
                    <img class="h-16 w-16 rounded-full" src="{{URL("vendor\adminlte\dist\img\usuario.png")}}" alt="">
            </div>
            <div class="col-span-7 ml-4 md:ml-8 lg:ml-4">
                <h2 class="text-2xl"><strong>Usuario: </strong>{{$consulta->name}}</h2>
                <p class="text-gray-900 text-sm my-2"><strong>Correo electronico: </strong>{{$consulta->email}}</p>
                <p class="text-gray-900 text-sm my-2"><strong>Consulta: </strong>{{$consulta->query}}</p>
            </div>
            @if ($consulta->response)
                <div class="col-span-8 my-4">
                    <h2 class="text-gray-900 text-center text-2xl font-medium"> Respuesta a la consulta de {{$consulta->name}}</h2>
                </div>
                <div class="col-span-8 flex justify-center">
                    <textarea readonly class="my-2 px-4 text-center rounded-lg w-96 mx-10 md:mx-16 lg:mx-20">{{$consulta->response}}</textarea>
                </div>
            @else
                <div class="col-span-8 flex justify-center my-4">
                    <strong><p class="flex items-center border border-black text-center text-lg w-80 h-40 bg-gray-200 rounded-lg px-2 py-2">No has recibido una respuesta a tu consulta</p></strong>
                </div>
            @endif
        </div>
        <hr class="mx-8 md:mx-32 lg:mx-60">
    </div>
    <x-card-footer />
</x-app-layout>