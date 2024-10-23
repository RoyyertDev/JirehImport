<header class="mb-10">
    <section class="hidden sm:grid grid-cols-3 grid-rows-2 gap-5 sm:max-h-[calc(100vh-120px)]">
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
    </section>
    <section class="sm:hidden">
        <figure class="relative">
            <img class="brightness-90 hover:brightness-125 hover:scale-[1.02] transition-all duration-300 object-fill w-full h-full rounded-lg shadow-[0_1px_8px_-5px_#F2BB06] hover:shadow-[0_4px_8px_-5px_#F2BB06]"
                id="imageSlider" src="" alt="">
            <button type="button"
                class="absolute top-1/2 left-0 transform -translate-y-1/2 hover:scale-150 transition-all duration-300"
                id="buttonLeft">
                <img src="./assets/img/es-menor-que.png" alt="anterior">
            </button>
            <button type="button"
                class="absolute top-1/2 right-0 transform -translate-y-1/2 hover:scale-150 transition-all duration-300"
                id="buttonRight">
                <img src="./assets/img/es-mayor-que.png" alt="siguiente">
            </button>
            <div class="flex flex-row absolute w-full justify-center items-center gap-3 bottom-0 mx-auto mb-3">
                <button type="button" id="sliderView0"
                    class="w-4 h-4 border border-[#F2BB06] rounded-full bg-transparent hover:scale-125 transition-all duration-300"></button>
                <button type="button" id="sliderView1"
                    class="w-4 h-4 border border-[#F2BB06] rounded-full bg-transparent hover:scale-125 transition-all duration-300"></button>
                <button type="button" id="sliderView2"
                    class="w-4 h-4 border border-[#F2BB06] rounded-full bg-transparent hover:scale-125 transition-all duration-300"></button>
            </div>
        </figure>
    </section>
</header>
<script>
    const imageSlider = document.getElementById('imageSlider');
    const figures = [
        {'src': './assets/img/header/Pasamontaña.jpeg','alt': 'JirehImport Pasamontaña'},
        {'src': './assets/img/header/Sueters.jpeg','alt': 'JirehImport Sueters'},
        {'src': './assets/img/header/Sueters2.jpeg','alt': 'JirehImport Sueters'}
    ];
    const sliderViews = ['sliderView0','sliderView1','sliderView2'];
    const sliderLeft = document.getElementById('buttonLeft');
    const sliderRight = document.getElementById('buttonRight');
    const sliderView0 = document.getElementById('sliderView0');
    const sliderView1 = document.getElementById('sliderView1');
    const sliderView2 = document.getElementById('sliderView2');
    let currentSlide = 0;
    sliderImage();

    sliderLeft.addEventListener('click', () => {
        currentSlide--;
        currentSlide < 0 ? currentSlide = 2 : currentSlide;
        clearSlider();
        sliderImage(); 
    });
    sliderRight.addEventListener('click', () => {
        currentSlide++;
        currentSlide > 2 ? currentSlide = 0 : currentSlide;
        clearSlider();
        sliderImage();
    });
    sliderView0.addEventListener('click', () => {
        currentSlide = 0;
        clearSlider();
        sliderImage();
    });
    sliderView1.addEventListener('click', () => {
        currentSlide = 1;
        clearSlider();
        sliderImage();
    });
    sliderView2.addEventListener('click', () => {
        currentSlide = 2;
        clearSlider();
        sliderImage();
    });
    function clearSlider () {
        for (let i = 0; i < sliderViews.length; i++) {
            document.getElementById(sliderViews[i]).style.backgroundColor = 'transparent';
        }
    }
    function sliderImage () {
        switch (currentSlide) {
            case 0: 
                imageSlider.src = figures[currentSlide].src;
                imageSlider.alt = figures[currentSlide].alt;
                document.getElementById(sliderViews[currentSlide]).style.backgroundColor = '#F2BB06';
            break;
            case 1: 
                imageSlider.src = figures[currentSlide].src;
                imageSlider.alt = figures[currentSlide].alt;
                document.getElementById(sliderViews[currentSlide]).style.backgroundColor = '#F2BB06';
            break;
            case 2: 
                imageSlider.src = figures[currentSlide].src;
                imageSlider.alt = figures[currentSlide].alt;
                document.getElementById(sliderViews[currentSlide]).style.backgroundColor = '#F2BB06';
            break;
            default:
                imageSlider.src = figures[currentSlide].src;
                imageSlider.alt = figures[currentSlide].alt;
                document.getElementById(sliderViews[currentSlide]).style.backgroundColor = '#F2BB06';
            break;
        };    
    }
    setInterval(() => {
        sliderRight.click();
    }, 4000);
</script>
