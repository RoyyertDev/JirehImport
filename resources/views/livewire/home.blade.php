<main class="w-5/6 mx-auto">
    <header class="grid grid-cols-3 grid-rows-2 gap-5 max-h-[calc(100vh-120px)] mb-10">
        <figure class="col-span-2 row-span-2">
            <img src="./assets/img/header/Pasamontaña.jpeg" class="hover:scale-[1.02] transition-all duration-300 object-cover w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]" alt="JirehImport Pasamontaña">
        </figure>
        <figure class="col-start-3 col-end-3 row-start-1 row-end-1">
            <img src="./assets/img/header/Sueters.jpeg" class="hover:scale-105 transition-all duration-300 object-cover w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]" alt="JirehImport Sueters">
        </figure>
        <figure class="col-start-3 col-end-3 row-start-2 row-end-2">
            <img src="./assets/img/header/Sueters2.jpeg" class="hover:scale-105 transition-all duration-300 object-cover w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]" alt="JirehImport Sueters">
        </figure>
    </header>
    <section class="pb-10">
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Ofrecemos</h1>
        <div class="grid grid-cols-4 gap-6">
            @for ($i = 0; $i < 4; $i++)
                <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                    <figure class="bg-white w-full h-full rounded-lg">
                        <img src="" alt="">
                    </figure>
                    <h1 class="text-center">Tipo de Producto {{ $i + 1 }}</h1>
                    <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                    <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Ver más</button>
                </article>
            @endfor
        </div>
    </section>
    <section class="pb-10">
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Atención</h1>
        <div class="grid grid-cols-4 gap-6">
            <figure class="rounded-lg overflow-hidden shadow-[0_3px_8px_-5px] shadow-[#F2BB06] hover:scale-105 transition-all duration-300">
                <img src="./assets/img/atencion/nosAdaptamos.jpeg" alt="Nos adaptamos">
            </figure>
            <figure class="rounded-lg overflow-hidden shadow-[0_3px_8px_-5px] shadow-[#F2BB06] hover:scale-105 transition-all duration-300">
                <img src="./assets/img/atencion/pasos.jpeg" alt="Pasos">
            </figure>
            <figure class="rounded-lg overflow-hidden shadow-[0_3px_8px_-5px] shadow-[#F2BB06] hover:scale-105 transition-all duration-300">
                <img src="./assets/img/atencion/mejorRopa.jpeg" alt="Mejor Ropa">
            </figure>
            <figure class="rounded-lg overflow-hidden shadow-[0_3px_8px_-5px] shadow-[#F2BB06] hover:scale-105 transition-all duration-300">
                <img src="./assets/img/atencion/questions.jpeg" alt="Preguntas">
            </figure>
        </div>
    </section>
    <section class="pb-10">
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Nuestra tienda</h1>
        <figure class="rounded-lg overflow-hidden shadow-[0_3px_8px_-5px] shadow-[#F2BB06] hover:scale-105 transition-all duration-300">
            <img class="" src="./assets/img/imports/tiendaFisica.jpeg" alt="">
        </figure>
    </section>
    <section class="pb-10">
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Lo más vendido</h1>
        <div class="grid grid-cols-4 gap-6">
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/masVendido/conjuntoNiños.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Conjunto Niños</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$1,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/masVendido/pantalones.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Pantalones</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$2,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/masVendido/sudaderas.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Sudaderas</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$3,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/masVendido/franelas.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Franelas</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$4,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
        </div>
        <h1 class="pt-8 flex justify-center items-center gap-2 text-[#F2BB06] font-semibold text-sm italic tracking-widest"> <img src="./assets/img/envio.png" alt="envio">CONTAMOS CON ENVIOS INTERNACIONALES <img src="./assets/img/receptor.png" alt="receptor"></h1>
    </section>
    <section class="pb-10">
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Promociones</h1>
        <div class="grid grid-cols-4 gap-6">
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/promociones/sudaderas.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Sudaderas</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$10,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/promociones/franelas.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Franelas</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$10,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/promociones/piezas.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>240 Piezas</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$480,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
            <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                <figure class="w-full h-full rounded-lg overflow-hidden">
                    <img src="./assets/img/promociones/pantalones.jpeg" alt="">
                </figure>
                <div class="flex justify-between items-center">
                    <h1>Pantalones</h1>
                    <h1 class="text-center text-[#F2BB06] font-semibold">$20,00</h1>
                </div>
                <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                <button class="hover:text-[#F2BB06] w-auto m-auto border rounded-lg hover:border-[#F2BB06] transition-all duration-300 px-4 py-1">Comprar</button>
            </article>
        </div>
        <h1 class="pt-8 flex justify-center items-center gap-2 text-[#F2BB06] font-semibold text-sm italic tracking-widest"> <img src="./assets/img/promocion.png" alt="promocion">¡LA MEJOR FORMA DE AHORRAR! NO TE LO PIERDAS <img src="./assets/img/ahorrar-dinero.png" alt="ahorrar-dinero"></h1>
    </section>
</main>