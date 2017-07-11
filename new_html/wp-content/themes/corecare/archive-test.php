<?php get_header();?>
<div class="default_page_template full-width-left">
    <div class="container">
        <?php echo do_shortcode('[topbanner header="Patient Care" content="CorCare brings together the most sophisticated diagnostic technologies with
                    the expertise and compassion of leading cardiologists to provide a completely integrated approach
                    to patient care, from testing and consultation to ongoing treatment and support."]');?>
       <h2 class="section_title">What you need to know <br>
           about Cardiac Care tests
       </h2>
       <div class="page_text_block text-center">
           <?php 
        	$obj = get_post_type_object( 'test' );
			echo $obj->description;
           ?>
       </div>
        <div class="full-width-left text-center">
            <h3 class="lilac_title">Here's what you need to know to prepare for your test:</h3>
            <div class="row">
<?php if(have_posts()){
	while(have_posts()){
		the_post(); ?>
				<div class="test_block">
                    <div class="test_block_bg_color">
                        <div class="bg_img" style= "background-image:url('<?php echo get_the_post_thumbnail_url(get_the_id());?>');"></div>
                        <div class="scan text-left">
                            <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon.png"></span>
                            <h2 class="text-center"><?php the_title();?></h2>
                           <?php the_excerpt();?>
                        </div>
                    </div>
                </div>
		<?php
	}
}
?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<div>
<?php get_footer();?>