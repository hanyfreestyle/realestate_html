<?php
require_once '_var.php';
require_once 'inc_meta.php';
?>

<body>
<?php
require_once 'inc_preloader.php';

require_once 'inc_header_top.php';
require_once 'inc_header_menu.php';

?>
<div class="section-space--sm bg-primary-5p">

    <div class="container section-space--smX">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="text-center">

                    <h2 class="mt-4 mb-6"> Egypt's Real Estate Blog </h2>

                </div>
            </div>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                ?>
                <div class="col-lg-3">
                    <div class="bg-neutral-0 rounded-4 p-2">
                        <a href="Blog_View.php" class="link d-block rounded-4">
                            <img src="./assets/imgs/blog_full.jpg" alt="image" class="img-fluid rounded-4">
                        </a>
                        <div class="p-5 pt-8">
                            <ul class="list list-row flex-wrap list-divider-dot-xsm mb-5 gap-3 gap-md-0">

                                <li>
                                    <div class="d-flex gap-2 align-items-center">
                                        <span class="material-symbols-outlined mat-icon fs-28"> calendar_month </span>
                                        <p class="mb-0"> 12 Jan, 2023 </p>
                                    </div>
                                </li>


                            </ul>
                            <h3 class="mb-5 crop_line_2">
                                <a href="#" class="link clr-neutral-700 :clr-primary-300 ">Find out the
                                    amenities of
                                    City Stars El Sahel Find out the amenities of City Stars El Sahel</a>
                            </h3>
                            <p class="mb-8 crop_line_2"> Realtor Magazine is the official publication of the National
                                Association of Realtors, providing real estate news, trends, and advice for real... </p>
                            <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex
                            align-items-center gap-1 fw-semibold"> Read More <span class="material-symbols-outlined mat-icon lh-1"> trending_flat </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>

    <div class="container section-space--sm ">
        <div class="row g-4">
            <div class="col-12">
                <nav>
                    <ul class="pagination gap-3 justify-content-center">
                        <li class="page-item">
                            <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">
                                <span class="material-symbols-outlined mat-icon fs-16"> arrow_back_ios </span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-neutral-0 :clr-neutral-0 active-bg" href="#">1</a></li>
                        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">2</a></li>
                        <li class="page-item"><a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link p-0 w-10 h-10 d-grid place-content-center lh-1 rounded-circle border border-primary-300 clr-primary-300" href="#">
                                <span class="material-symbols-outlined mat-icon fs-16"> arrow_forward_ios </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>




<?php


require_once 'inc_footer.php';
require_once 'inc_js.php';
?>
</body>

</html>