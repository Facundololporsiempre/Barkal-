<x-guest-layout>
    <div class="bg-zinc-200 h-screen flex items-center">
            <div class="bg-zinc-100 w-96 mx-auto px-10 rounded-lg">
                <div class="flex justify-center items-center mt-8">
                    <img class="w-24 h-24" src="{{URL("vendor\adminlte\dist\img\checkbox-303113__480.webp")}}" alt="">
                </div>
                <div class="leading-8 mt-4">
                    <h1 class="text-gray-900 text-center text-3xl font-bold leading-8">¡Tu compra ha sido realizada con exito!</h1>
                </div>
                <div class="leading-4 py-4">
                    <p class="text-gray-900 text-center">¡Recibimos el formulario de su compra!</p>
                    <p class="text-gray-900 text-center">Gracias por proferir comprar su repuesto en <b>Barkalí</b></p>
                </div>
                <div class="bg-blue-700 rounded-3xl mb-8">
                    {{-- <a href="{{route("repuestos.carrito")}}" class="text-white text-center block hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">Entendido</a> --}}
                    <a href="/" class="text-white text-center block hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">Entendido</a>
                </div>
            </div>
    </div>
    <div class="w-screen relative hidden">
        <div class="bg-gray-900 fixed top-0 left-0 right-0">
            <x-card-heederLogo />
        </div>
    </div>
</x-guest-layout>