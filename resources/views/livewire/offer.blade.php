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