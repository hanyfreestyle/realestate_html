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
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
            <h1>Egypt's Real Estate Blog</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pb-0">
                        <li class="breadcrumb-item"><a href="https://realestate.eg"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="https://realestate.eg/en/compounds">Blog</a></li>

                    </ol>
                </nav>

                <ul class="list gap-6">

                    <?php

                    for ($i = 0; $i <= 4; $i++) {
                        ?>
                        <li>
                            <div class="bg-neutral-0 rounded-4 p-2">
                                <a href="#" class="link d-block rounded-4 blog_img">
                                    <img src="./assets/imgs/unit_photo.jpg" alt="image" class="img-fluid rounded-4">
                                </a>
                                <div class="p-5 pt-8">

                                    <h3 class="mb-5">
                                        <a href="#" class="link clr-neutral-700 :clr-primary-300"> Realtor Magazine </a>
                                    </h3>
                                    <p class="mb-8"> Realtor Magazine is the official publication of the National Association of Realtors, providing real estate news, trends, and advice for real... </p>
                                    <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex
                                    align-items-center gap-1 fw-semibold"> Read More <span class="material-symbols-outlined mat-icon lh-1"> trending_flat </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }


                    ?>




                    <li>
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
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 mobile_stop">
                <div class="section-space--smX">
                    <?php
                    require_once 'Project_Right.php';
                    ?>
                </div>
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