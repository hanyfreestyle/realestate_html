<section class="auth-container overflow-hidden">
    <img src="./assets/img/element-1.png" alt="image" class="img-fluid auth-container__el-1 auth-container__el">
    <img src="./assets/img/element-2.png" alt="image" class="img-fluid auth-container__el-2 auth-container__el">
    <div class="section-space">
        <div class="section-space--sm-bottom">
            <div class="container">
                <div class="row g-4 align-items-md-center">
                    <div class="col-md-8">
                        <h2 class="mt-4 mb-0">  Featured Developers  </h2>
                    </div>
                    <div class="col-md-4">
                        <div class="auth-slider__btn justify-content-md-end">
                            <div class="swiper-button-prev auth-slider__prev"></div>
                            <div class="swiper-button-next auth-slider__next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper auth-slider">

                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 0; $i <= 10; $i++) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team__member">
                                            <img src="./assets/imgs/dev_1.jpg" alt="image" class="team__member-img">


                                        </div>
                                        <div class="mt-15 text-center">
                                            <h4> Developer Name </h4>


                                        </div>
                                    </div>
                                </div>
                                <?php
                            }

                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>