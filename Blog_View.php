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
                <div class="bg-neutral-0 rounded-4 p-2 mb-10">
                    <a href="#" class="link d-block rounded-4">
                        <img src="./assets/imgs/pro/pro_01.jpg" alt="image" class="img-fluid rounded-4">
                    </a>
                    <div class="p-5 pt-8">
                        <h3 class="mb-5">
                            <a href="#" class="link clr-neutral-700 :clr-primary-300"> Bloomfields Mostakbal City Compound </a>
                        </h3>

                        <div class="hr-dashed my-8"></div>
                        <ul class="list list-row flex-wrap align-items-center list-divider-dot gap-4 gap-md-0">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined mat-icon clr-secondary-400"> distance </span>
                                    <p class="mb-0"> New Cairo </p>
                                </div>
                            </li>
                            <li>
                                <p class="mb-0"><a href="#"><span class="clr-primary-300">Project Name</span></a></p>
                            </li>

                            <li>
                                <p class="mb-0">
                                    <span class="clr-neutral-500">Developed by :</span>Tatweer Misr
                                </p>
                            </li>
                        </ul>

                    </div>
                </div>

                <?php

                require_once 'Project_Units.php';
                require_once 'Blog_Des.php';
                require_once 'Project_Video.php';
                require_once 'Project_Amenities.php';


                ?>
            </div>
            <?php
                require_once 'Blog_View_Inc.php'
            ?>

        </div>
    </div>
</div>
<?php

require_once 'Blog_MoreBlog.php';

require_once 'Project_Project_Blog.php';



require_once 'inc_footer.php';
require_once 'inc_js.php';
?>
</body>

</html>