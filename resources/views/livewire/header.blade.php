<header 
    class="w-full mb-4 px-7 md:px-14 lg:px-28 bg-black sticky top-0 z-10 transition-all duration-100 shadow-[#F2BB06] rounded-b-3xl"
    x-data="{ scrolled: false, navOpen: false }"
    x-on:scroll.window="scrolled = (window.pageYOffset > 0) ? true : false"
    :class="{ 'shadow-[0_4px_5px_-4px]': scrolled }"
>
    <nav 
        class="sm:grid grid-rows-[1fr_auto_1fr] grid-cols-1 sm:grid-rows-1 sm:grid-cols-[1fr_60%_1fr] md:grid-cols-[1fr_70%_1fr] py-4 transition-all duration-100"
        :class="{ 'grid': navOpen, 'hidden': !navOpen }"
    >
        <div class="flex justify-between w-full">
            <a wire:navigate.hover href="{{ route('home') }}">
                <img class="m-auto" src="./assets/img/logo.png" width="80px" height="40px" alt="JirehImport logo">
            </a>
            <button x-on:click="navOpen = false" class="block sm:hidden px-3.5 rounded-lg border border-white hover:border-[#F2BB06] hover:text-[#F2BB06] transition duration-300"> - </button>
        </div>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-3 md:gap-6 lg:gap-12">
            <x-link-nav :active="request()->routeIs('home')" href="{{ route('home') }}">Inicio</x-link-nav>
            <x-link-nav :active="request()->routeIs('about')" href="{{ route('about') }}">Quienes somos</x-link-nav>
            <x-link-nav :active="request()->routeIs('')" href="">Productos</x-link-nav>
            <x-link-nav :active="request()->routeIs('')" href="">Carrito</x-link-nav>
        </div>
        <div class="flex justify-center items-center gap-4">
            @if (Route::has('login'))
            @auth
            <x-link-nav :active="request()->routeIs('')" href="">Perfil</x-link-nav>
            @endauth
            <x-link-nav :active="request()->routeIs('')" href="">Iniciar sesión</x-link-nav>
            {{-- @if (Route::has('register'))
            <x-link-nav :active="request()->routeIs('')" href="">Registrarse</x-link-nav>
            @endif --}}
            @endif
        </div>
    </nav>
    <section class="py-4 justify-between w-full flex sm:hidden" :class="{ 'hidden': navOpen, 'flex': !navOpen }">
        <a wire:navigate.hover href="{{ route('home') }}">
            <img class="m-auto" src="./assets/img/logo.png" width="80px" height="40px" alt="JirehImport logo">
        </a>
        <button x-on:click="navOpen = true" class="sm:hidden px-3 rounded-lg border border-white hover:border-[#F2BB06] hover:text-[#F2BB06] transition duration-300"> + </button>
    </section>
</header>
