<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage corcare
 * @since corcare 1.0
 */
?>
<?php get_header(); ?>
<div class="default_page_template full-width-left">
    <div id="our-service">
        <div class="container">
            <div class="page_top_banner" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/services-banner.png')">
                <div class="banner_text_block">
                    <h2>Our Services</h2>
                    <p>CorCare offers the highest quality cardiac care services, providing
                        rapid patient access to advanced diagnostic testing, nuclear testing,
                        and consultation.  This approach and our integration with the community health care network, means that our patients' are diagnosed, and their
                        treatments can begin quickly and seamlessly. This is a key factor to
                        ensuring the best possible outcome for all of our patients.
                    </p>
                </div>
            </div>
            <?php 
                $argss = array('post_type'=>'service');
                $loops = new WP_Query($argss);
                if($loops->have_posts()){
                    while($loops->have_posts()){
                        $loops->the_post();
                        ?>
                            <div class="block-cocare-difference" id="<?php the_title();?>">
                                <div class="block-our1">
                                    <h2 class="section_title"><?php the_title();?></h2>
                                    <div class="box-bg-image">
                                        <div class="bg-image">
                                            <img src="<?php echo get_the_post_thumbnail_url($loops->get_the_id()); ?>" alt="corcare">
                                        </div>
                                    </div>
                                    <?php the_content();?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                        <?php
                    }
                }
            ?>
          
            </div>
            
            </div>
        </div>


<?php get_footer(); ?>
