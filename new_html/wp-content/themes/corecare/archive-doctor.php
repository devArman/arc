<?php get_header();?>
  

    



<div class="default_page_template full-width-left" >
    <div class="container">
        <h2 class="section_title"> Our Doctors</h2>
        <div class="OurDoctors">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-4 col-sm-4 col-xs-6 doctor_info_box">
                <div class="view_profile_bg_color">
                    <div class="bg_img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                    <div class="doctors_info text-center">
                        <a href="<?php the_permalink(); ?>" class="view_profile_icon"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        <h2><?php the_title();?></h2>
                        <a href="<?php the_permalink(); ?>" class="view_profile_link">View Profile ></a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
<div>
<?php get_footer();?>