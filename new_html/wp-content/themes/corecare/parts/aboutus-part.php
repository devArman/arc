<?php
 require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="main-about full-width-left">
    <div class="block-about-us block_with_shadow full-width-left">
    <?php if($header == 'true'){?>
        <h2 class="section_title">About Us</h2>
        <?php } ?>
        <div class="block-all-about">
            <div class="block-our">
                <?php $mission = get_post_type_object( 'service' );?>
                <div class="box-our"  style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/love.png')">

                    <div class="box-circle-img">
                        <div>
                            <img class="img-smallhearth block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/smallhearth.png" alt="small hearth">
                        </div>
                    </div>
                </div>
                <div class="block-our-text">
                    <h3><?php echo $mission->labels->menu_name;?></h3>
                    <p>
                        <?php echo $mission->description;?>
                    </p>
                    <a href="<?php echo get_post_type_archive_link('service');?>" class="main_link">Read More</a>
                </div>
            </div>
            <div class="block-our">
                <?php $doc = get_post_type_object( 'doctor' );?>
                <div class="box-our" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/doctor.png')">
                    <div class="box-circle-img">
                        <div>
                            <img class="img-man block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/man.png" alt="man">
                        </div>
                    </div>
                </div>
                <div class="block-our-text">
                    <h3><?php echo $doc->labels->menu_name;?></h3>
                    <p>
                        <?php echo $doc->description;?>
                    </p>
                    <a href="<?php echo get_post_type_archive_link('doctor');?>" class="main_link">Learn More</a>
                </div>
            </div>
            <div class="block-our">
                <div class=" box-our" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/calendar.png')">
                    <div class="box-circle-img">
                        <div>
                            <img class="img-date block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/date.png" alt="date">
                        </div>
                    </div>
                </div>
                <div class="block-our-text">
                    <h3><?php echo get_the_title('9');?></h3>
                    <p>
                        <?php echo get_post_meta('9', 'event-desc', true);?>
                    </p>
                    <a href="<?php echo get_the_permalink('9');?>" class="main_link">See More</a>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>

</div>