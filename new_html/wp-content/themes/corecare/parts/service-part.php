<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="block-our-services full-width-left block_with_shadow">
<?php if($header=='false'){}else{?>
        <h2 class="section_title">Our Services</h2>
<?php }?>
        <div class="block-all">
             <?php 
                $service_args = array('post_type'=>'service', 'posts_per_page'=>3);
                $loop_service = new WP_Query($service_args);
                if($loop_service->have_posts()){
                    while($loop_service->have_posts()){
                        $loop_service->the_post();  ?>
            <div class="block-health">
                <div class="bg-image"><?php echo get_the_post_thumbnail($loop_service->get_the_ID()); ?></div>
                <h3><?php the_title();?></h3>

                <p>
                    <?php the_excerpt();?>
                </p>
                <a href="<?php echo get_site_url().'/services/#'.get_the_title($loop_service->get_the_id());?>" class="lilac_btn_default">Read More</a>
            </div>
            <?php  }
                }
                wp_reset_query();
            ?>
        </div>
    </div>