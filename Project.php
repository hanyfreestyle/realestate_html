<?php
require_once '_var.php';
require_once 'inc_meta.php';
?>

<body>
<?php
require_once 'inc_preloader.php';

require_once 'inc_header_top.php';
require_once 'inc_header_menu.php';




require_once 'Project_Slider.php';
?>
<div class="bg-primary-5p">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="section-space--sm">
                    <?php

                    require_once 'Project_Info.php';
                    require_once 'Project_Des.php';
                    require_once 'Project_Amenities.php';
                    require_once 'Project_Video.php';
                    require_once 'Project_Map.php';
                    require_once 'Project_Units.php';
                    require_once 'Project_FAQ.php';

                    ?>


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

    <?php
    #require_once 'Project_Recently.php';
     require_once 'Project_Project.php';
    ?>

</div>
<?php



require_once 'inc_footer.php';
require_once 'inc_js.php';
?>
</body>

</html>