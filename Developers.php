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

<section class="overflow-hidden">
    <div class="section-space--smX">
        <div class="section-space--sm">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="text-center">

                            <h2 class="mt-4 mb-6"> Developers </h2>
                            <p class="mb-0"> Real estate can be bought, sold, leased, or rented, and can be a valuable investment opportunity. The value of real estate can be... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section-space--sm">
            <div class="row g-4">
                <?php
                for ($i = 1; $i <= 16; $i++) {
                    ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="team  mb-lg-5">
                            <div class="team__member DevelopersList">
                                <img src="./assets/imgs/dev/dev_<?= $i?>.jpg" alt="image" class="team__member-img">
                                <a href="#" class="link team__contact d-grid place-content-center w-15 h-15 rounded-circle bg-neutral-0 clr-primary-300 :bg-primary-300 :clr-neutral-0 fs-24 box-shadow">
                                    <span class="material-symbols-outlined mat-icon fs-36"> add </span>
                                </a>

                            </div>
                            <div class="mt-15 text-center">
                                <h4 class="crop_line_1"> Developers Name will be here </h4>
                                <p class="mb-0 fs-18"><?php echo rand(5,30)?>  Project</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
        </div>
        <div class="container">
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

</section>
<div class="container mb-lg-5">
    <div class="row g-4  mb-lg-5">
        <div class="col-12  mb-lg-5">

        </div>
    </div>
</div>

<?php
require_once 'inc_footer.php';
FooterMenu("project");
require_once 'inc_js.php';
?>
</body>

</html>