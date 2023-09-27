<?php
$lang_type = 'icon';




function FooterMenu($name){
?>
    <div class="sticky-navbar fixed d-xl-none">
        <div class="sticky-info">
            <a href="index.php" class="active_footerX sticky_a <?php if($name == 'index') echo 'active_footer';?>">
                <span class="material-symbols-outlined mat-icon"> home </span>
                Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="Project.php" class="sticky_a <?php if($name == 'project') echo 'active_footer';?>">

                <span class="material-symbols-outlined mat-icon"> home_work  </span>
                Project
            </a>
        </div>
        <div class="sticky-info">
            <a href="List.php" class="sticky_a <?php if($name == 'Units') echo 'active_footer';?>">
                <span class="material-symbols-outlined mat-icon"> home </span>
                Units
            </a>
        </div>
        <div class="sticky-info">
            <a href="#" class="sticky_a">
                <span class="material-symbols-outlined mat-icon"> menu </span>
                Menu
            </a>
        </div>
    </div>

<?php
}
?>


