<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="patient_care_section full-width-left block_with_shadow">
        <h2 class="section_title">Patient Care</h2>
        <?php 
            $care_obj = get_post_type_object( 'care' );
        ?>
        <p class="text-center"><?php echo $care_obj->description;?></p>
        <div class="col-md-12">
            <div class="patient_care clearfix">
                <?php
                $block = 'right_block';
                $care_args = array('post_type' => 'care', 'posts_per_page'=>4 );
                $care_loop = new WP_Query($care_args);
                if($care_loop->have_posts()){
                    while($care_loop->have_posts()){
                        $care_loop->the_post();
                        if($block=="right_block"){$block="left_block";}
                        elseif($block=="left_block"){$block="right_block";}
                ?>
                <div class="blocks <?php echo $block;?>">
                    <h3><?php the_title();?></h3>
                    <a href="<?php $care_loop->the_permalink();?>" class="lilac_btn_default">Learn More</a>
                </div>
                <?php }}?>
                <div class="patient_care_center">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Patient_Care.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>