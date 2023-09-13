<section class="section-space discover-location-section">
    <img src="./assets/img/category-section-el.png" alt="image" class="img-fluid d-none d-xxl-block position-absolute category-section-element">
    <div class="section-space--sm-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center">

                        <h2 class="mt-4 mb-6"> Featured Locations  </h2>
                        <p class="mb-0"> Real estate can be bought, sold, leased, or rented, and can be a valuable
                            investment opportunity. The value of real estate can be... </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-md-0">
        <div class="row g-md-0">
            <div class="col-12">
                <div class="location-slider-container">
                    <div class="swiper location-slider">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 1; $i <=5; $i++) {
                                $x = $i ;
                                ?>
                                <div class="swiper-slide">
                                    <div class="location-slider__card">
                                        <div class="location-slider__img">
                                            <img src="./assets/imgs/location-slider-<?= $x?>.jpg" alt="image"
                                                 class="img-fluid
                                        w-100">
                                        </div>
                                        <div class="location-slider__content">

                                            <div class="d-flex align-items-center justify-content-between w-100">
                                                <a href="#" class="link d-flex flex-column gap-1 clr-neutral-0
                                                flex-grow-1">
                                                    <span class="d-block fs-20 fw-semibold"> Istanbul, Turkey </span>
                                                    <span class="d-block fs-14"> 20 Project </span>
                                                    <span class="d-block fs-14"> 170 Property </span>
                                                </a>
                                                <a href="#" class="link d-grid place-content-center w-9 h-9 border
                                                border-primary-50 rounded-circle clr-primary-50 :bg-primary-300 flex-shrink-0">
                                                    <span class="material-symbols-outlined mat-icon"> arrow_forward_ios </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>


                        </div>
                    </div>
                    <div class="swiper-pagination location-slider__pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>