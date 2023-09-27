<div class="row">
    <div class="col-12 py-4">
        <div class="location-slider-container pb-5">
            <div class="swiper project-Slider">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <=5; $i++) {
                        $x = $i ;
                        ?>
                        <div class="swiper-slide">
                            <div class="listing-card">
                                <div class="listing-card__img">
                                    <img src="./assets/imgs/pro1.jpg" alt="image" class="img-fluid w-100">
                                </div>
                                <div class="listing-card__content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="link d-inline-block py-2 px-5 rounded-pill
                                            bg-secondary-200 clr-neutral-900"> Completed </a>
                                        <a href="#" class="link d-inline-block py-2 px-5 rounded-pill
                                            bg-tertiary-300 clr-neutral-900"> New </a>
                                    </div>
                                    <div class="listing-card__content-is">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fs-14 fw-medium d-inline-block clr-neutral-0"> Residential </span>
                                            <span class="d-inline-block fs-20 fw-medium clr-tertiary-300"> <span class="fs-16 fw-normal clr-neutral-0"> Start from</span> 5,256,000
                              </span>
                                        </div>
                                        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                                            <div class="flex-grow-1">
                                                <h4>
                                                    <a href="#" class="link clr-neutral-0 :clr-neutral-0 crop_text_1"> Azha Ain Sokhna Resort  </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="material-symbols-outlined mat-icon clr-tertiary-300"> distance </span>
                                                    <span class="clr-neutral-0"> New Cairo </span>
                                                </div>
                                            </div>
                                            <div class="text-end w-100 py-0">
                                                <a href="#" class="btn btn-outline-secondary rounded-pill py-3 px-6 fw-semibold"> Read
                                                    More </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
            <div class="swiper-pagination project-Slider__pagination"></div>
        </div>
    </div>
</div>