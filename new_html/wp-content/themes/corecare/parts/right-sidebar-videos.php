<div class="videos_section">
<p class="text-center">Educational Videos</p>
<?php 
$args = array('post_type'=>'video', 'posts_per_page'=>4);
$loop = new WP_Query($args);
if($loop->have_posts()){ 
    while($loop->have_posts()){ $loop->the_post(); ?>
                        <div class="video_block text-center">
                            <div class="video_content">
                                <iframe class="box-my-iframe" src="<?php the_field('video_url');?>" frameborder="0" allowfullscreen="">
                                    
                                </iframe>
                            </div>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        </div>
<?php
   }
}
?>
</div>