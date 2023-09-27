<div class="section-space--sm bg-primary-5p_x">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center pb-3"> Properties for sale </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

<?php
$type = [
    'Apartment','Duplex','Studio','Town House','Twin House',
    'Pent House','Villa','Office','Store','Chalet','Pharmacy','Clinic','Laboratory'
];

$loc = [
    'New Cairo',
    'New Administrative Capital',
    'Mostakbal City',
    'Maadi',
    '6th October',
    'Nasr City',
    'Obour City',
    'Shorouk City',
    'Sheikh Zayed',
    'New Mansoura City',
    'Ras Sudr',
    'Cairo',
];
?>
                <div class="list-group about-tab mb-7 ">

                    <?php
                    for ($i = 0; $i < count($type); $i++) {
                        if($i == 0){
                            $ac = 'active';

                        }else{
                            $ac = '';
                        }
                        ?>
                        <a class="list-group-item <?=$ac?>" data-bs-toggle="list" href="#list-residentialX_<?=$i?>">
                            <?=$type[$i]?></a>
                        <?php
                    }

                    ?>

                </div>
                <div class="tab-content mb-8">


                    <?php
                    for ($i = 0; $i < count($type); $i++) {
                        if($i == 0){
                            $ac = 'active';

                        }else{
                            $ac = '';
                        }
                        ?>


                        <div class="tab-pane fade show <?=$ac?>" id="list-residentialX_<?=$i?>">
                            <div class="row">







                                <?php
                                for ($x = 0; $x < count($loc); $x++) {
                       ?>
                                <div class="col-lg-4 crop_text_1line mb-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="material-symbols-outlined mat-icon clr-primary-300"> arrow_right_alt  </span>
                                        <p class="mb-0"> <?=$type[$i]?> For Sale in  <?=$loc[$x]?></p>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>










                        </div>
                        </div>
                        <?php
                    }
                    ?>



                    <div class="tab-pane fade" id="list-aprtmentsX">
                        <p class="mb-0"> If you're interested in buying a residential property, you may want to consider factors such as location, price of the home. </p>
                    </div>
                    <div class="tab-pane fade" id="list-commercialX">
                        <p class="mb-0"> If you're interested in buying a residential property, you may want to consider factors such as location, price of the home. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>