<nav class="bg-gray-900" x-data="{open:false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-24">

        {{-- Boton del menu mobil --}}
        <div class="absolute inset-y-0 left-0 flex items-center justify-end sm:hidden">
            <button x-on:click="open=true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-zinc-200 hover:text-white hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
                Icon when menu is closed.

                Heroicon name: outline/menu

                Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
                Icon when menu is open.

                Heroicon name: outline/x

                Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>

        {{-- Logo y categorias  --}}
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex-1 flex items-center lg:relative left-9 justify-center md:justify-start lg:justify-start xl:justify-start">
                <a href="/">
                    {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow"> --}}
                    {{-- <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow"> --}}
                    <img class="block lg:hidden h-24 w-40 relative right-2" src="{{URL('vendor\adminlte\dist\img\LogoB.png')}}" alt="Barkalí">
                    <img class="hidden lg:block h-24 w-40" src="{{URL('vendor\adminlte\dist\img\LogoB.png')}}" alt="Barkalí">
                </a>
            </div>
            {{-- Menu lg --}}
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-3 shrink-0 w-80 h-24 justify-end items-center relative left-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a> --}}

                    <a href="/" class="text-zinc-200 hover:bg-zinc-400 hover:text-white px-3 py-2 rounded-md font-bold">TIENDA</a>
                    <a href="{{route("repuestos.repuesto")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white px-3 py-2 rounded-md font-bold">REPUESTOS</a>
                    <a href="{{route("repuestos.consulta")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white px-3 py-2 rounded-md font-bold">CONTACTOS</a>
                    {{-- <a href="{{route("consulta.consultas.create")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white px-3 py-2 rounded-md font-bold">CONTACTOS</a> --}}

                </div>
            </div>
        </div>

        @auth
        <!-- Notificacion y perfil -->
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            {{-- Boton notificacion --}}
            {{-- <a href="{{route("repuestos.carrito")}}" id="carrito"> --}}
                {{-- <button type="button" class="p-1 rounded-full hover:bg-zinc-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-zinc-900 focus:ring-white"> --}}
                    {{-- <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg> --}}
                    {{-- <img class="w-6 h-6" src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG65.png" alt=""> --}}
                    {{-- <img class="w-6 h-6" src="{{URL("vendor\adminlte\dist\img\carrito.png")}}" alt=""> --}}
                {{-- </button> --}}
            {{-- </a> --}}
            {{-- Perfil --}}
            <div class="ml-3 relative" x-data= "{open:false}">
                <div>
                    <button x-on:click= "open=true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
                    </button>
                </div>
                <div x-show="open" x-on:click.away="open=false" class="origin-top-right z-50 absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-700 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="{{route("profile.show")}}" class="block px-4 py-2 text-sm hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
                    {{-- <a href="{{route("admin.home")}}" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a> --}}

                    @can('admin.home')
                        <a href="{{route("admin.home")}}" class="block px-4 py-2 text-sm hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                    @endcan

                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-2" @click.prevent="$root.submit();">
                            Cerrar sesión
                        </a>
                    </form>
                </div>
            </div>
        </div>

        @else
        {{-- Boton de login y register --}}
        <div class="hidden sm:block sm:ml-6">
            {{-- <a href="{{route("login")}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a> --}}
            <a href="{{route("register")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white px-3 py-2 rounded-md font-bold">CREAR CUENTA</a>
        </div>
        @endauth

        </div>
    </div>

    {{-- Menu mobil --}}
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            {{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a> --}}

            <a href="/" class="text-zinc-200 hover:bg-zinc-400 hover:text-white block px-3 py-2 rounded-md font-bold">TIENDA</a>
            <a href="{{route("repuestos.repuesto")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white block px-3 py-2 rounded-md font-bold">REPUESTOS</a>
            <a href="{{route("repuestos.contacto")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white block px-3 py-2 rounded-md font-bold">CONTACTOS</a>
            @auth
            @else
            <a href="{{route("register")}}" class="text-zinc-200 hover:bg-zinc-400 hover:text-white block px-3 py-2 rounded-md font-bold">CREAR CUENTA</a>
            @endauth
        </div>
    </div>
</nav>

