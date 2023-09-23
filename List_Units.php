<div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-5">
    <h4 class="mb-0">Other units in the same project (55) </h4>

</div>
<!--<div class="hr-dashed my-8"></div>-->
<?php
for ($i = 0; $i <= 20 ; $i++) {
    ?>



    <div class="col-12 mb-5 ty-compact-list-units">
        <div class="property-card property-card--row">

            <div class="property-card__head">
                <div class="swiper property-card-slider">
                    <div class="swiper-wrapper ">

                        <?php
                        for ($x = 1; $x <= 5; $x++) {
                        ?>

                            <div class="swiper-slide ">
                                <div class="property-card__img">
                                    <img src="./assets/imgs/units/pro_<?=$x?>.jpg" alt="image" class="img-fluid w-100">
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="swiper-pagination property-card-pagination"></div>
                    <div class="swiper-button-prev property-card-prev"></div>
                    <div class="swiper-button-next property-card-next"></div>
                </div>
                <a href="#" class="link property-card__tag d-inline-block bg-neutral-0 :bg-primary-300
                clr-primary-300 :clr-neutral-0 py-2 px-4 rounded-pill fw-medium"> Apartment </a>
                <button class="property-card__fav w-10 h-10 rounded-circle bg-neutral-0 d-grid place-content-center border-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> favorite </span>
                </button>
            </div>



            <div class="property-card__content">
                <div class="property-card__body">
                    <div class="d-flex align-items-center gap-1 mb-4">
                        <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                        <span class="d-inline-block">New Cairo  </span>
                    </div>
                    <a href="#" class="link d-block clr-neutral-700 :clr-primary-300 fs-20 fw-medium mb-7">
                        About 150 M Apartment For Sale With Less Than Market Price In Bloomfields
                    </a>
                    <ul class="list list-row flex-wrap dotted-divider">
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> home_work </span>
                            <span class="d-block fs-14"> 3 Room </span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> bed </span>
                            <span class="d-block fs-14"> 5 Bed </span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> bathtub </span>
                            <span class="d-block fs-14"> 1 Bath </span>
                        </li>

                        <li>


                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> zoom_out_map </span>
<!--                            <span class="d-block fs-14"> 125 M <sup>2</sup> </span>-->
                            <span class="d-block fs-14"> 125 M </span>
                        </li>
                    </ul>
                </div>
                <div class="property-card__body py-0">
                    <div class="hr-dashed"></div>
                </div>
                <div class="property-card__body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">


                        <ul class="list list-row flex-wrap gap-3 justify-content-center">
<!--                              flex-shrink-0 -->


                            <li>
                                <a href="#">
                                    <div class="w-11 h-11 rounded-circle bg-primary-300 d-grid place-content-center">
                                        <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-0 fw-300"> phone_in_talk </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <div class="w-11 h-11 rounded-circle bg-secondary-300 d-grid place-content-center
                                flex-shrink-0">
                                    <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300">  <i class="fa-brands fa-whatsapp"></i> </span>
                                </div>
                                </a>


                            </li>
                            <li>
                                <a href="#">
                                <div class="w-11 h-11 rounded-circle bg-tertiary-300 d-grid place-content-center
                                flex-shrink-0">
                                    <span class="material-symbols-outlined mat-icon fs-24 clr-neutral-700 fw-300"> mark_as_unread </span>
                                </div>
                                </a>

                            </li>

                        </ul>

                        <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex
                    align-items-center gap-1 fw-semibold"> Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>
<div class="row mb-5 ">
    <div class="col-12 text-center mb-lg-5">
        <div class="show-more-units btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1
fw-semibold">Show more</div>

    </div>
</div>

