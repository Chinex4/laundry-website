<section class="main-slider">
    <div class="main-slider-ripped-paper">
    </div>
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(/template/laundry/assets/images/backgrounds/main-slider-1-1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <p>We are Passionate About Laundry</p>
                                <h2>Laundry <span>&</span> <br> Dry Cleaning <br> Service</h2>
                                <a href="{{route('about')}}" class="thm-btn">Discover More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(/template/laundry/assets/images/backgrounds/main-slider-1-2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <p>We are Passionate About Laundry</p>
                                <h2>Laundry <span>&</span> <br> Dry Cleaning <br> Service</h2>
                                <a href="{{route('about')}}" class="thm-btn">Discover More <span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-right angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</section>
