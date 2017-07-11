<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<div class="default_page_template full-width-left" >
    <div class="container">
        <h2 class="section_title">NEWS</h2>
        <div class="full-width-left">
<!--            <div class="col-md-12">-->
<?php $args=array('post_type'=>'post', 'posts_per_page'=>1);
$loop = new WP_Query($args);
if($loop->have_posts()){
    while($loop->have_posts()){ 
        $loop->the_post();
        ?>
        <div class="news_left_part">
                    <div class="full-width-left block_with_shadow">
                        <img class="news_post_image" src="<?php echo get_the_post_thumbnail_url($loop->get_the_id());?>" alt="">
                        <h3><?php the_title();?></h3>
                        <p>By <?php the_author();?> - <?php the_date();?> </p>
                        <?php the_content();?>
                        <a href="<?php the_permalink();?>" class="main_link">Read More ></a>
                    </div>

                </div>
                <?php
    }
}
?>        
                <div class="news_right_part">
                <?php dynamic_sidebar( 'newsright' ); ?>
                </div>
<!--             </div>-->
        </div>

        <div class="main-news full-width-left">
            <div class="block-news full-width-left ">
                <div class="block-news-health">
<?php 
$count = 1;
$args = array('post_type'=>'post', 'posts_per_page'=>-1);
$loop = new WP_Query($args);
if($loop->have_posts()){
    while($loop->have_posts()){
        if($count==1){$loop->the_post();$count++;}
        if($count!=1){
        $loop->the_post();
?>
                    <div class="box-tips"> 
                        <div class="box-tips-img" style="background-image: url('<?php echo get_the_post_thumbnail_url($loop->get_the_id());?>')">
                            <div class="box-circle-img">
                                <div>
                                    <img class="img-circle block-news-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/circle.png" alt="circle">
                                </div>

                            </div>
                        </div>
                        <div class="block-news-text">
                            <h3><?php the_title();?></h3>
                            <p>
                               <?php the_excerpt();?>
                            </p>
                            <a href="<?php the_permalink();?>" class="main_link">Read More</a>
                            <div class="box-information">
                                <span><?php the_author();?> - <?php the_date();?></span>
                            </div>
                        </div>
                    </div>
                   

              <?php }}}?>
                </div>
            </div>

        </div>
    </div>
    <div>
<?php get_footer(); ?>
<style>
.news_right_part li{
    list-style:none !important;
}
</style>