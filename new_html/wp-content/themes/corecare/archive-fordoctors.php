<?php get_header();?>
<div class="default_page_template full-width-left" >
    <div class="container" style="min-height: 50vh">
        <h2 class="section_title">For Doctors</h2>
        <div class="full-width-left block_with_border text-center">
            <?php 
            	$obj = get_post_type_object( 'fordoctors' );
				echo $obj->description;
            ?>
        </div>
<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		?>
		  <div class="full-width-left block_with_border">
		            <div class="small_wrapper clearfix">

		                <div class="full-width-left careers_info">
		                <h3 class="career_title"><?php the_title();?></h3>
		                   <?php the_content();?>
		                     <a href="<?php the_field('register_for_doctors');?>" class="lilac_btn_default">Register Here</a>
		                    <ul class="light_list">
		                        <li>Download  <a href="<?php the_field('download_for_doctors');?>">event announcement</a></li>
		                        <li> Complete the announcemnt</li>
		                        <li>Register by faxing it to  <a href="<?php the_field('fax_for_doctors')?>"><?php the_field('fax_for_doctors')?></a></li>
		                        <li>You can also contact Eric Pfister at <a href="tel:<?php the_field('contact_for_doctors');?>"> <?php the_field('contact_for_doctors');?> </a></li>
		                    </ul>
		                    <?php echo do_shortcode( "[social contactus='".get_field('mail_for_doctors')."' ln='".get_field('linkedin_for_doctors')."' tw='".get_field('twitter_for_doctors')."' fb='".get_field('facebook_for_doctors')."' pt='".get_field('pinterest_for_doctors')."']" ); ?>
		                </div>
		            </div>
		        </div>
		<?php
	}
}
?>
	</div>
</div>
<?php get_footer();?>