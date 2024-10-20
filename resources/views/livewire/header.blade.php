<header 
    class="w-full mb-4 px-28 bg-black sticky top-0 z-10 transition-all duration-100 shadow-[#F2BB06] rounded-b-3xl"
    x-data="{ scrolled: false}"
    x-on:scroll.window="scrolled = (window.pageYOffset > 0) ? true : false"
    :class="{ 'shadow-[0_4px_5px_-4px]': scrolled }"
>
    <nav class="grid grid-cols-[1fr_70%_1fr] py-4">
        <a href="{{ Route('home') }}">
            <img class="m-auto" src="./assets/img/logo.png" width="80px" height="40px" alt="JirehImport logo">
        </a>
        <div class="flex justify-center items-center gap-12">
            <x-link-nav :active="request()->routeIs('home')" href=" {{ route('home') }}">Inicio</x-link-nav>
            <x-link-nav :active="request()->routeIs('about')" href=" {{ route('about') }}">Quienes somos</x-link-nav>
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
</header>