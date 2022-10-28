<form class="bg-gray-900 pb-10 pt-2 px-4 md:px-20 lg:px-20 xl:px-20">
    <div class="flex">
        <div class="relative" x-data= "{open:false}">
            <div>
                <button x-on:click= "open=true" type="button" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-zinc-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-zinc-200 dark:border-gray-600" id="user-menu-button" aria-expanded="false" aria-haspopup="true">CATEGORIAS<svg aria-hidden="true" class="ml-3 w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            </div>
            <div x-show="open" x-on:click.away="open=false" class="origin-top-right z-50 absolute left-0 mt-2 w-48 py-1 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        {{-- @foreach ($categorias as $categoria)
                            <a href="{{route("repuestos.categoria", $categoria)}}">
                                <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white">{{$categoria->name}}</button>
                            </a>
                        @endforeach --}}
                    </li>
                    {{-- <li>
                        <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white">Templates</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white">Design</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-zinc-200 dark:hover:bg-zinc-400 dark:hover:text-white">Logos</button>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="relative w-full">
            <input class="block p-4 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Busca el repuesto que necesitas..." required="">
            <button class="absolute top-0 right-0 p-4 text-sm font-medium text-zinc-200 bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-700 dark:hover:bg-blue-600 dark:focus:ring-blue-600" type="submit"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        </button>
    </div>
</form>
