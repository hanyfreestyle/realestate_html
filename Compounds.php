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
<div class="bg-primary-5p">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">

                <div class="section-space--sm">
                    <h2 class="mb-8"> Egypt's Compounds - 1447 compounds and 31799 properties for sale.  </h2>
                    <div class="list-group about-tab mb-7">
                        <a class="list-group-item active" data-bs-toggle="list" href="#list-residential"> 1447 COMPOUNDS </a>
                        <a class="list-group-item" data-bs-toggle="list" href="#list-aprtments"> 31799 PROPERTIES </a>

                    </div>
                    <div class="tab-content mb-8">
                        <div class="tab-pane fade show active" id="list-residential">
                            <?php
                              require_once 'Compounds_Project.php';
                            ?>
                        </div>
                        <div class="tab-pane fade" id="list-aprtments">
                            <?php
                            require_once 'Compounds_Units.php';
                            ?>

                        </div>

                    </div>




                </div>
            </div>
            <div class="col-xl-4 mobile_stop">
                <div class="section-space--sm">
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
FooterMenu("project");
require_once 'inc_js.php';
?>
</body>

</html>