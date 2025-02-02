<?php

$PAGE_TITLE = 'BetBlaze';
$PAGE_DESCRIPTION = 'Играй в лучшие игры и получай невероятные бонусы прямо сейчас!';

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
    <section class="section offer__section position-relative">
        <div class="container-fluid custom__container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 data-aos="fade-up">Эксклюзивные предложения для новых игроков</h2>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="offer__wrapper d-flex flex-column align-items-center gap-1 gap-md-4" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/images/offers/offer_crypto.webp" alt="Crypto">
                        <p data-aos="fade-down" class="subtitle-2">200%</p>
                        <p data-aos="fade-up" class="text-center">бонусом при пополнении криптой</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="offer__wrapper d-flex flex-column align-items-center gap-1 gap-md-4" data-aos="fade-down" data-aos-delay="500">
                        <img data-aos="flip-right" src="assets/images/offers/offer_fiat.webp" alt="Fiat">
                        <p data-aos="fade-down" class="subtitle-2">100%</p>
                        <p data-aos="fade-up" class="text-center">бонусом при пополнении фиат</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="offer__wrapper d-flex flex-column align-items-center gap-1 gap-md-4" data-aos="fade-up" data-aos-delay="700">
                        <img data-aos="flip-right" src="assets/images/offers/offer_spin.webp" alt="Free Spins">
                        <p data-aos="fade-down" class="subtitle-2">125</p>
                        <p data-aos="fade-up" class="text-center">бесплатных спинов</p>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center py-5">
                    <button data-aos="fade-up">Узнай больше о бонусах<span class="flare"></span></button>
                </div>
            </div>
        </div>

        <!-- Buffalo image -->
        <div class="buffalo-back-offer-image-wrapper position-absolute">
            <div class="position-relative">
                <!-- Back-1 -->
                <div class="position-absolute buffalo-back-1-wrapper">
                    <div class="buffalo-back-1-image"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section games__section position-relative pt-0">
        <div class="container-fluid custom__container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 data-aos="fade-up">Популярные игры</h2>
                </div>
                <div class="col-12">
                    <?php require 'includes/components/games.php'; ?>
                </div>
                <div class="col-12 d-flex justify-content-center py-5">
                    <button data-aos="fade-right" class="text-uppercase p-4 px-5">Зарегистрироваться<span class="flare"></span></button>
                </div>
            </div>
        </div>

        <!-- Buffalo image -->
        <div class="buffalo-back-games-image-wrapper position-absolute">
            <div class="position-relative">
                <!-- Back-1 -->
                <div class="position-absolute buffalo-back-2-wrapper">
                    <div class="buffalo-back-2-image"></div>
                </div>
            </div>
        </div>

        <!-- Buffalo image -->
        <div class="buffalo-back-games-3-image-wrapper position-absolute">
            <div class="position-relative">
                <!-- Back-3 -->
                <div class="position-absolute buffalo-back-3-wrapper">
                    <div class="buffalo-back-3-image"></div>
                </div>
                <!-- Back-4 -->
                <div class="position-absolute buffalo-back-4-wrapper">
                    <div class="buffalo-back-4-image"></div>
                </div>
            </div>
        </div>
    </section>
</main>