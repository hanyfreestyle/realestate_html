<div class="section-space--sm bg-primary-5p">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center pb-3"> Latest Real Estate Updates </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="swiper blogh-slider">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 0; $i <= 8; $i++) {
                                if($i == 0){
                                        $img = './assets/imgs/blog_full.jpg';
                                }else{
                                    $img = './assets/imgs/blog.jpg';
                                }
                                ?>
                                <div class="swiper-slide ">

                                    <div class="mb-5 p-5">
                                        <div class="property-card property-card--row">
                                            <div class="property-card__head">

                                                <div class="property-card__img">
                                                    <img src="<?= $img ?>" alt="image" class="img-fluid w-100">
                                                </div>


                                            </div>
                                            <div class="property-card__content">
                                                <div class="property-card__body">

                                                    <a href="#" class="link d-block clr-neutral-700 :clr-primary-300
                                                    fs-20 fw-medium mb-7">
                                                        All information about Bloomfields Egypt
                                                    </a>
                                                    <p>
                                                        Bloomfields Mostakbal City
                                                        Bloomfields Egypt is one of the strongest rea...
                                                    </p>
                                                    <!--                                                <ul class="list list-row flex-wrap dotted-divider mt-4">-->
                                                    <!--                                                    <li>-->
                                                    <!--                                                        <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> home_work </span>-->
                                                    <!--                                                        <span class="d-block fs-14"> Sarai Compound New Cairo</span>-->
                                                    <!--                                                    </li>-->
                                                    <!--                                                    <li>-->
                                                    <!--                                                        <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> distance  </span>-->
                                                    <!--                                                        <span class="d-block fs-14"> New Cairo </span>-->
                                                    <!--                                                    </li>-->
                                                    <!---->
                                                    <!--                                                </ul>-->
                                                </div>
                                                <div class="property-card__body py-0">
                                                    <div class="hr-dashed"></div>
                                                </div>
                                                <div class="property-card__body">
                                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <span class="d-block fs-20 fw-medium clr-primary-300">

                          <span class="d-inline-block
                      clr-neutral-500 fs-14 fw-normal blog_date_text">                25 september 2023 </span>
                      </span>
                                                        <a href="#" class="btn btn-outline-primary py-3 px-6
                                                        rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> Read More </a>
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
                    <div class="swiper-pagination blogh-slider__pagination mt-5"></div>
                </div>
            </div>
        </div>
    </div>
</div>