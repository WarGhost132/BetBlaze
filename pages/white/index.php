<?php

$PAGE_TITLE = 'Buffalo';
$PAGE_DESCRIPTION = 'Description';

?>

<main>
    <section class="section main__section h-100 position-relative d-flex align-items-center">
        <div class="container-fluid custom__container">
            <div class="row position-relative">
                <div class="col-12 main_col">
                    <div class="main__content__wrapper">
                        <h1 data-aos="fade-right" data-aos-delay="500">Приветственный бонус 200%</h1>
                        <p data-aos="fade-right" class="subtitle" data-aos-delay="500">Играй в лучшие игры и получай невероятные бонусы прямо сейчас!</p>
                        <button data-aos="fade-right" data-aos-delay="500">Получить бонус<span class="flare"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buffalo image -->
        <div class="buffalo-image-wrapper position-absolute">
            <div class="position-relative">
                <!-- Circle -->
                <div class="position-absolute circle-wrapper" data-aos="fade-left" data-aos-delay="800" data-aos-duration="900">
                    <div class="main__circle d-flex justify-content-center align-items-center flex-column">
                        <p class="custom-title my-4">+125</p>
                        <p class="subtitle-3 text-center">бесплатных спинов</p>
                    </div>
                </div>
            </div>
            <div class="buffalo-image" data-aos="fade-left" data-aos-delay="200"></div>
        </div>

        <!-- TODO: Fix this using method above -->
        <div class="main__circle__wrapper d-none position-absolute top-0 end-0 overflow-hidden pt-3 pe-3">
            <div class="main__circle d-flex justify-content-center align-items-center flex-column">
                <p class="custom-title my-4">+125</p>
                <p class="subtitle-3 text-center">бесплатных спинов</p>
            </div>
        </div>

    </section>
</main>