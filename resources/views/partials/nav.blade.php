
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/parallel-universe.png') }}" class="h-8" alt="Mi blog Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Mi blog</span>
        </a>
        <!-- Botón de menú para pantallas pequeñas -->
        <button id="menu-toggle" class="block md:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <!-- Contenedor del menú que se oculta/muestra -->
        <div id="menu-items" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a class="block py-2 px-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->is('/') ? 'text-blue-600' : 'text-gray-900' }}" href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->is('projects') ? 'text-blue-600' : 'text-gray-900' }}" href="{{ url('/projects') }}">
                        Proyectos
                    </a>
                </li>
                <li>
                    <a class="block py-2 px-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->is('blog') ? 'text-blue-600' : 'text-gray-900' }}" href="{{ url('/blog') }}">
                        Blog
                    </a>
                </li>
                <li>
                    <form action="{{ route('blog.search') }}" method="GET" class="flex">
                        <input type="text" name="query" placeholder="Buscar en el blog..."
                            class="px-2 py-1 border rounded-l-lg focus:outline-none">
                        <button type="submit" class="px-3 py-1 bg-blue-600 text-white rounded-r-lg hover:bg-blue-500">
                                Buscar
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // JavaScript para alternar la visibilidad del menú
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menuItems = document.getElementById('menu-items');
        menuItems.classList.toggle('hidden');
    });
</script>