<?php get_header();?>  
    <?php get_header(); ?>
<div class="default_page_template full-width-left" >
    <div class="container">
        <h2 class="section_title">Educational Videos</h2>
        <div class="block-video">
            <div class="box-all-videos">
                <?php if(have_posts()) : while(have_posts()) : the_post();
                ?>
               <div class=" box-videos-top">
                    <div class="box-text-img">
                        <div class="box-video">
                            <iframe width="100%" height="304" class="box-my-iframe" src="<?php echo get_post_meta(get_the_id(), 'video_url', true);?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <a href="<?php the_permalink();?>"><span><?php the_title();?></span></a>
                    </div></div>
                   <?php endwhile; endif; ?>
                
            </div>

        </div>
    </div>
    <div>
<?php get_footer();?>

