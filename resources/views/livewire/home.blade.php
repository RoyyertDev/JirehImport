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
        <div class="grid grid-cols-4 grid-rows-2 gap-6">
            @for ($i = 0; $i < 7; $i++)
                <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                    <figure class="bg-white w-full h-full rounded-lg">
                        <img src="" alt="">
                    </figure>
                    <h1 class="text-center">Tipo de Producto {{ $i + 1 }}</h1>
                    <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                    <button class="hover:text-[#F2BB06] w-auto m-auto">Ver más</button>
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
        <h1 class="text-center font-semibold text-4xl pb-10 italic tracking-widest underline underline-offset-8 decoration-[#F2BB06]">Lo más vendido</h1>
        <div class="grid grid-cols-4 gap-6">
            @for ($i = 0; $i < 4; $i++)
                <article class="bg-[#0e0e0e] grid grid-rows-[250px_1fr] gap-4 p-4 rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_3px_8px_-5px_#F2BB06] hover:scale-105 transition-all duration-300">
                    <figure class="bg-white w-full h-full rounded-lg">
                        <img src="" alt="">
                    </figure>
                    <h1 class="text-center">${{ $i + 1 }},00</h1>
                    <p class="text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                    <button class="hover:text-[#F2BB06] w-auto m-auto">Comprar</button>
                </article>
            @endfor
        </div>
        <h1 class="pt-8 flex justify-center items-center gap-2 text-[#F2BB06] font-semibold text-sm italic tracking-widest"> <img src="./assets/img/envio.png" alt="envio">CONTAMOS CON ENVIOS INTERNACIONALES <img src="./assets/img/receptor.png" alt="receptor"></h1>
    </section>
</main>