
<div class="section-space pt-0">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="text-center">
                        <h2 class="mt-4 mb-5 pt-3"> Developers </h2>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="swiper team-slider">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 0; $i <= 8; $i++) {
?>
                                <div class="swiper-slide">
                                    <div class="dev_slider_card text-center">
                                        <div class="Img_div">
                                            <img src="./assets/imgs/dev_1.jpg" alt="image" class="object-fit-covers">
                                          </div>
                                    </div>
                                    <h4 class="mb-2 mt-5"> Developers Name </h4>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                    <div class="swiper-pagination team-slider__pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

