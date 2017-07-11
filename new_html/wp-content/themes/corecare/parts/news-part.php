<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="main-news full-width-left">

    <div class="block-news full-width-left block_with_shadow ">
        <h2 class="section_title">News</h2>
        <div class="block-news-health">
            <?php
            $args = array('post_type'=>'post', 'posts_per_page'=>3);
            $loop = new WP_Query($args);
            if($loop->have_posts()){
                while($loop->have_posts()){
                    $loop->the_post();
                    ?>
                    <div class="box-tips">
                        <div class="box-tips-img" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
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
                <?php }}?>
        </div>
    </div>
</div>