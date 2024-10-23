<header class="sm:grid grid-cols-3 grid-rows-2 gap-5 sm:max-h-[calc(100vh-120px)] mb-10">
    <figure class="col-span-2 row-span-2">
        <img src="./assets/img/header/Pasamontaña.jpeg"
            class="brightness-90 hover:brightness-125 hover:scale-[1.02] transition-all duration-300 object-fill w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]"
            alt="JirehImport Pasamontaña">
    </figure>
    <figure class="col-start-3 col-end-3 row-start-1 row-end-1">
        <img src="./assets/img/header/Sueters.jpeg"
            class="brightness-90 hover:brightness-125 hover:scale-105 transition-all duration-300 object-fill w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]"
            alt="JirehImport Sueters">
    </figure>
    <figure class="col-start-3 col-end-3 row-start-2 row-end-2">
        <img src="./assets/img/header/Sueters2.jpeg"
            class="brightness-90 hover:brightness-125 hover:scale-105 transition-all duration-300 object-fill w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]"
            alt="JirehImport Sueters">
    </figure>
    <div class="swiper-container sm:hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/img/header/Pasamontaña.jpeg" alt="JirehImport Pasamontaña">
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/header/Sueters.jpeg" alt="JirehImport Sueters">
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/header/Sueters2.jpeg" alt="JirehImport Sueters">
            </div>
        </div>
        <!-- Agrega paginación y navegación si es necesario -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</header>
<!-- Carrusel para pantallas pequeñas -->
<script type="module">
    // import Swiper JS
        import Swiper from './swiper';
        // import Swiper styles
        import './swiper/css';

    document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>