<section class="section-space">
    <div class="section-space--sm-bottom">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6">

                    <h2 class="mt-4 mb-0">  Featured Projects  </h2>
                </div>
                <div class="col-xl-6">
                    <div class="list-group flex-row flex-wrap justify-content-xl-end gap-5">
                        <a href="#list-apartments" class="featured-tab link fw-semibold clr-primary-400 d-inline-block py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill active" data-bs-toggle="list"> New Cairo </a>
                        <a href="#list-houses" class="featured-tab link fw-semibold clr-primary-400 d-inline-block
                        py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill" data-bs-toggle="list">
                            New Cairo 2 </a>
                        <a href="#list-commercial" class="featured-tab link fw-semibold clr-primary-400
                        d-inline-block py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill"
                           data-bs-toggle="list"> New Cairo 3 </a>
                        <a href="#list-studio" class="featured-tab link fw-semibold clr-primary-400 d-inline-block
                        py-3 px-6 bg-primary-50 :bg-primary-300 :clr-neutral-0 rounded-pill" data-bs-toggle="list">
                            New Cairo 4 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-apartments">
                        <?php
                        require_once 'B_Featured_01.php'
                        ?>
                    </div>
                    <div class="tab-pane fade" id="list-houses">
                        <?php
                        require_once 'B_Featured_02.php'
                        ?>
                    </div>
                    <div class="tab-pane fade" id="list-commercial">
                        <?php
                        require_once 'B_Featured_03.php'
                        ?>
                    </div>
                    <div class="tab-pane fade" id="list-studio">
                        <?php
                        require_once 'B_Featured_04.php'
                        ?>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="property-grid.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> View All <span class="material-symbols-outlined mat-icon lh-1"> trending_flat </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>