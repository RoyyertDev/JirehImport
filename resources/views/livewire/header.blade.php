<header
    class="w-full mb-4 px-7 md:px-14 lg:px-28 bg-black sticky top-0 z-10 transition-all duration-100 shadow-[#F2BB06] rounded-b-3xl"
    x-data="{ scrolled: false, navOpen: false }" x-on:scroll.window="scrolled = (window.pageYOffset > 0) ? true : false"
    :class="{ 'shadow-[0_4px_5px_-4px]': scrolled }">
    <nav class="sm:grid grid-rows-[1fr_auto_1fr] grid-cols-1 sm:grid-rows-1 sm:grid-cols-[1fr_60%_1fr] md:grid-cols-[1fr_70%_1fr] py-4 transition-all duration-100"
        :class="{ 'grid': navOpen, 'hidden': !navOpen }">
        <div class="flex justify-between w-full">
            <a wire:navigate.hover href="{{ route('home') }}">
                <img class="m-auto" src="./assets/img/logo.png" width="80px" height="40px" alt="JirehImport logo">
            </a>
            <button x-on:click="navOpen = false"
                class="block sm:hidden transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32px" height="32px" viewBox="0,0,256,256">
                    <g fill="#f2bb06" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.55556,3.55556)"><path d="M19,15c-1.023,0 -2.04812,0.39087 -2.82812,1.17188c-1.562,1.562 -1.562,4.09425 0,5.65625l14.17188,14.17188l-14.17187,14.17188c-1.562,1.562 -1.562,4.09425 0,5.65625c0.78,0.78 1.80513,1.17188 2.82813,1.17188c1.023,0 2.04812,-0.39088 2.82813,-1.17187l14.17188,-14.17187l14.17188,14.17188c1.56,1.562 4.09525,1.562 5.65625,0c1.563,-1.563 1.563,-4.09325 0,-5.65625l-14.17187,-14.17187l14.17188,-14.17187c1.562,-1.562 1.562,-4.09425 0,-5.65625c-1.56,-1.561 -4.09625,-1.562 -5.65625,0l-14.17187,14.17188l-14.17187,-14.17187c-0.78,-0.78 -1.80513,-1.17187 -2.82812,-1.17187z"></path></g></g>
                </svg>
            </button>
        </div>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-3 md:gap-6 lg:gap-12">
            <x-link-nav :active="request()->routeIs('home')" href="{{ route('home') }}">Inicio</x-link-nav>
            <x-link-nav :active="request()->routeIs('about')" href="{{ route('about') }}">Nosotros</x-link-nav>
            <x-link-nav :active="request()->routeIs('')" href="">Productos</x-link-nav>
            <x-link-nav :active="request()->routeIs('')" href="">Carrito</x-link-nav>
        </div>
        <div class="flex justify-center items-center gap-4">
            @if (Route::has('login'))
            @auth
            <x-link-nav :active="request()->routeIs('')" href="">Perfil</x-link-nav>
            @endauth
            <x-link-nav :active="request()->routeIs('')" href="">Acceder</x-link-nav>
            {{-- @if (Route::has('register'))
            <x-link-nav :active="request()->routeIs('')" href="">Registrate</x-link-nav>
            @endif --}}
            @endif
        </div>
    </nav>
    <section class="py-4 justify-between w-full flex sm:hidden" :class="{ 'hidden': navOpen, 'flex': !navOpen }">
        <a wire:navigate.hover href="{{ route('home') }}">
            <img class="m-auto" src="./assets/img/logo.png" width="80px" height="40px" alt="JirehImport logo">
        </a>
        <button x-on:click="navOpen = true"
            class="sm:hidden transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0,0,256,256">
                <g fill="#f2bb06" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.55556,3.55556)"><path d="M56,48c2.209,0 4,1.791 4,4c0,2.209 -1.791,4 -4,4c-1.202,0 -38.798,0 -40,0c-2.209,0 -4,-1.791 -4,-4c0,-2.209 1.791,-4 4,-4c1.202,0 38.798,0 40,0zM56,32c2.209,0 4,1.791 4,4c0,2.209 -1.791,4 -4,4c-1.202,0 -38.798,0 -40,0c-2.209,0 -4,-1.791 -4,-4c0,-2.209 1.791,-4 4,-4c1.202,0 38.798,0 40,0zM56,16c2.209,0 4,1.791 4,4c0,2.209 -1.791,4 -4,4c-1.202,0 -38.798,0 -40,0c-2.209,0 -4,-1.791 -4,-4c0,-2.209 1.791,-4 4,-4c1.202,0 38.798,0 40,0z"></path></g></g>
            </svg>
        </button>
    </section>
</header>