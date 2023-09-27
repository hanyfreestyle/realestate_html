<div class="row">


<?php
for ($i = 1; $i <= 10 ; $i++) {
    ?>



    <div class="col-6 mb-5 ty-compact-list-unitsX">
        <div class="property-card property-card--row">

            <div class="property-card__head">
                <div class="swiper property-card-slider">
                    <div class="swiper-wrapper ">

                        <?php
                        for ($x = 2; $x <= 4; $x++) {
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
                clr-primary-300 :clr-neutral-0 py-2 px-4 rounded-pill fw-medium"> Residential </a>
                <button class="property-card__fav w-10 h-10 rounded-circle bg-neutral-0 d-grid place-content-center border-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> favorite </span>
                </button>
            </div>



            <div class="property-card__content">
                <div class="property-card__body">
                    <p class="crop_line_2">
                        <a href="#" class="link d-block clr-neutral-700 :clr-primary-300 fs-20 fw-medium mb-3 ">
                            About 150 M Apartment For Sale With Less Than Market Price In Bloomfields
                        </a>

                    </p>
                    <p class="mt-0  mb-5">
                        <span class="clr-neutral-500">Developed by :</span>Tatweer Misr
                    </p>

                    <ul class="list list-row flex-wrap dotted-divider">
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> distance </span>
                            <span class="d-block fs-14"> New Cairo</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> construction </span>
                            <span class="d-block fs-14"> Completed </span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined mat-icon clr-neutral-600 d-inline-block mb-1"> calendar_month </span>
                            <span class="d-block fs-14"> 2023 </span>
                        </li>

                    </ul>


                </div>
                <div class="property-card__body py-0">
                    <div class="hr-dashed"></div>
                </div>
                <div class="property-card__body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">


                        <ul class="list list-row flex-wrap gap-3 justify-content-center">
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
</div>


<nav>
    <ul class="pagination gap-3 justify-content-center">
        <li class="page-item">
            <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300 bg-transparent" href="#">
                <span class="material-symbols-outlined mat-icon fs-16"> arrow_back_ios </span>
            </a>
        </li>
        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-neutral-0 :clr-neutral-0 active-bg" href="#">1</a></li>
        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300 bg-transparent" href="#">2</a></li>
        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300 bg-transparent" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300 bg-transparent" href="#">
                <span class="material-symbols-outlined mat-icon fs-16"> arrow_forward_ios </span>
            </a>
        </li>
    </ul>
</nav>


