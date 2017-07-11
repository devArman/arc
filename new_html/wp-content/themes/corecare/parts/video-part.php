<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="videos_section full-width-left text-center ">
<?php if($header=='false'){} else{?>
        <h2 class="section_title"> Educational Videos</h2>
        <?php }?>
         <div class="full-width-left">
             <div class="video_slider">
                <?php
                    $video_args = array('post_type'=>'video', 'posts_per_page'=>-1);
                    $video_loop = new WP_Query($video_args);
                    if($video_loop->have_posts()){
                        while($video_loop->have_posts()){ 
                            $video_loop->the_post();
                            
                ?>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                         <!--
                             <iframe class="box-my-iframe" src="<?php echo get_post_meta(get_the_id(), 'video_url', true);?>" frameborder="0" allowfullscreen></iframe>
                            -->
                            <a href="<?php the_permalink();?>">
                            <?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail'); ?>
                            <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                            </a>
                         </div>
                         <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                     </div>
                 </div>
                 <?php }}?>
             </div>
         </div>
        <div class="full-width-left">
         <a href="<?php echo get_post_type_archive_link('video');?>" class="lilac_btn_default">View All Videos</a>
        </div>
    </div>