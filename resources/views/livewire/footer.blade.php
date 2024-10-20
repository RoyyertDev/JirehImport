<footer class="w-full py-10 bg-[#1d1f20] flex flex-col justify-center items-center gap-4">
    <section class="w-5/6 mx-auto grid grid-cols-[1fr_1fr_1fr_auto] justify-center gap-4">
        <article>
            <img src="./assets/img/logo.png" width="100px" height="60px" alt="JirehImport logo">
            <p class="text-zinc-400">
                En <span class="text-[#F2BB06] font-semibold italic">Jireh Import,</span> encontrarás una amplia selección de ropa deportiva, casual y uniformes diseñados para ofrecer estilo, comodidad y seguridad. Nos destacamos por nuestra capacidad de adaptarnos rápidamente a las tendencias del mercado, asegurando siempre productos de alta calidad a precios accesibles.
            </p>
        </article>
        <article>
            <h1 class="font-semibold pb-1">Información</h1>
            <div class="grid grid-cols-2 text-zinc-400 gap-x-8 gap-y-1">
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="{{ route('home') }}">Inicio</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="{{ route('about') }}">Quienes somos</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Productos</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Carrito</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Iniciar sesión</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Registrarse</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Instagram</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Facebook</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">WhatsApp</a>
                <a wire:navigate.hover class="hover:text-[#F2BB06] transition-all duration-300 w-auto" href="http://">Tiktok</a>
            </div>
        </article>
        <article>
            <h1 class="font-semibold pb-1">Contactanos</h1>
            <form action="">
                <fieldset class="grid grid-cols-2 gap-4">
                    <input class="rounded-lg bg-[#0e0e0e] text-white border-none ring-[#F2BB06] focus:ring-offset-0" type="text" id="nombre" name="nombre" placeholder="Nombre">
                    <input class="rounded-lg bg-[#0e0e0e] text-white border-none ring-[#F2BB06] focus:ring-offset-0" type="email" id="email" name="email" placeholder="Email">
                    <textarea class="col-span-2 rounded-lg bg-[#0e0e0e] text-white border-none ring-[#F2BB06] focus:ring-offset-0" rows="3" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                    <button class="col-start-2 text-zinc-400 hover:text-[#F2BB06] transition-all duration-300 border border-transparent hover:border-[#F2BB06] rounded-lg py-1.5 px-1 w-auto bg-[#0e0e0e]">Enviar</button>
                </fieldset>
            </form>
            {{-- <button class="text-zinc-400 hover:text-[#F2BB06] transition-all duration-300">Iniciar Sesión</button>
            <button class="text-zinc-400 hover:text-[#F2BB06] transition-all duration-300">Registrarse</button> --}}
        </article>
        <article>
            <h1 class="font-semibold text-cente pb-1">Ubicanos</h1>
            <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15704.592568968266!2d-67.6039471!3d10.2496337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803d0ecb35340d%3A0x2493a677baccaa8f!2sJireh%20Import!5e0!3m2!1ses-419!2sve!4v1729198078844!5m2!1ses-419!2sve" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </article>
    </section>
    <span class="w-5/6 border border-[#F2BB06] mx-auto"></span>
    <section class="w-5/6 mx-auto text-zinc-400">
        <p>
            Copyright © 2024 <span class="font-semibold text-[#F2BB06]">JirehImport.</span> Todos los derechos reservados.
        </p>
        <div>
            
        </div>
    </section>
</footer>