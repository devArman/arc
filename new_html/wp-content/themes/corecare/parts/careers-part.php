<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<!--<div class="default_page_template full-width-left" >-->
<!--    <div class="container" style="min-height: 50vh">-->
        <h2 class="section_title">Careers</h2>
        <div class="small_wrapper clearfix">
            <p class="text-center">CorCare invites you to make a difference in our patients' lives.
                Join our team of compassionate, caring health care professionals
                and help deliver the CorCare experience.
            </p>
        </div>

        <?php
            $career_args = array('post_type'=>'career', 'posts_per_page'=>-1);
            $career_loop = new WP_Query($career_args);
            if($career_loop->have_posts()){
                while($career_loop->have_posts()){
                    $career_loop->the_post();?>

                    
        <div class="full-width-left block_with_shadow">
            <div class="small_wrapper clearfix">
                    
                <div class="full-width-left careers_info">
                    <h3 class="career_title"><?php the_title();?></h3>
                    <?php 
                        the_content();
                    ?>
                </div>
            </div>
        </div>
        <?php
                }
            }
        ?>
<!--    </div>-->
<!--    <div>-->