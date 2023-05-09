<header>
    <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ route('Inicio')}}" class="flex items-center">
                <img src="{{ Storage::url('prospiti.png')}}" class="mr-3 h-6 sm:h-9">
                <span class="text-gray-800 self-center text-xl font-semibold whitespace-nowrap ">PProyecto</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button type="button" href="#" class=" openModal text-neutral-800 bg-neutral-300 hover:bg-neutral-400 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Subir archivo</button>    
                <a href="#" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Acerca de</a>
            </div>
        </div>
    </nav>
</header>
