<?php
/**
 * Template Name: Events
 *
 * @package WordPress
 * @subpackage corcare
 * @since corcare 1.0
 */
?>
<?php get_header(); ?>
<div class="default_page_template full-width-left" >
    <div class="container" style="min-height: 50vh">
        <h2 class="section_title">Calendar</h2>
        <div class="clearfix calendar_box">
            <div class="date_picker_part">
                <div id="calendar">
                    <div></div>
                </div>
            </div>
            <div class=" events_part">
                <div class="full-width-left text-center">
                <?php $date = time();?>
                    <p class="today_week_day"><?php echo date('l', $date);?></p>
                    <p class="today_date"><?php echo date('d', $date);?></p>
                </div>
                <div class="full-width-left today_events_list">
                <?php 
                $events_count = 0;
                    $args = array('post_type'=>'event');
                    $loop = new WP_Query($args);
                    if($loop->have_posts()){
                        while($loop->have_posts()){
                            $loop->the_post();
                                if(date('d/F/Y', $date)==get_field('date'))
                                {  $events_count++;


                            ?>
                                <div class="full-width-left">
                       <h3><?php the_field('time')?> - <?php the_title();?></h3>
                       <?php the_excerpt();?>
                       <a href="<?php the_permalink();?>" class="lilac_btn_default">Read More </a>
                   </div> 
                            <?php 
                        }
                      ?>
                            <div class="full-width-left"></div>
                            <?php
                        }
                        
                    } 
                    if($events_count==0){ ?>
                             <div class="full-width-left">
                             <br>
                             <p>There are no events!</p>
                             <strong>Nearest avaliable events</strong>
                             </div>
                             <?php
                            $new_loop = new WP_Query($args);
                            if($new_loop->have_posts()){
                                while($new_loop->have_posts()){
                                    $new_loop->the_post();
                                    if(strtotime(get_field('date'))>strtotime('tomorrow')){
                                        ?>
                                            <div class="full-width-left">
                                            <h5><?php echo date('Y-m-d', strtotime(get_field('date')));?></h5>
                                            <h3><?php the_field('time')?> - <?php the_title();?></h3>
                                            <?php the_excerpt();?> 
                                            <a href="<?php the_permalink();?>" class="lilac_btn_default">Read More </a>   
                                            </div>
                                        <?php break; 
                                    }
                                }
                            }
}

                            ?>
          
                </div>
            </div>

        </div>
    </div>
   
<?php get_footer(); ?>
