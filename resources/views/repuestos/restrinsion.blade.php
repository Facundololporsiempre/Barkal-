<x-guest-layout>
    <div class="bg-zinc-200 h-screen flex justify-center items-center">
            <div class="bg-zinc-100 w-96 mx-auto px-10 rounded-lg absolute top-40" style="margin-top: 8px;">
                <div class="flex justify-center items-center">
                    <img class="w-36 h-36" src="{{URL("vendor\adminlte\dist\img\aregistrarseb.png")}}" alt="">
                </div>
                <div class="leading-8">
                    <h1 class="text-gray-900 text-center text-3xl font-bold pt-2 leading-8">¡Hola! Para comprar un repuesto, necesitas ingresár a tu cuenta</h1>
                </div>
                <div class="leading-4">
                    <p class="text-gray-900 text-center py-4">Ingrese a su cuenta facil y rapido para poder realizar la compra del repuesto que necesitas</p>
                </div>
                <div class="bg-blue-700 rounded-3xl">
                    <a href="{{route("register")}}" class="text-white text-center block hover:bg-blue-600 px-3 py-2 rounded-3xl font-bold">Registrarse</a>
                </div>
                <a href="{{route("login")}}" class="text-blue-700 text-center block px-3 py-4 font-bold">Iniciar sesión</a>
            </div>
    </div>
    <div class="w-screen relative">
        <div class="bg-gray-900 fixed top-0 left-0 right-0">
            <x-card-heederLogo />
        </div>
    </div>
</x-guest-layout>