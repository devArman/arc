<?php get_header(); ?>
<div class="default_page_template full-width-left">
<div class="container">
	<h2 class="section_title">Educational Videos</h2>
<?php
	if(have_posts()){
		while(have_posts()){
			the_post();
			?>
	       <div class="full-width-left block_with_shadow">
			   <div class="video_details_content video_top_part">
				   <iframe src="<?php the_field('video_url'); ?>" class="single-video"></iframe>
				   <h3 class="block_title"><?php the_title(); ?></h3>
				   <?php the_content();?>
			   </div>

		    </div>
		   <div class="full-width-left block_with_shadow">
			   <div class="video_details_content comments_part">
				<?php
				comments_template();
				?>
				</div>
			</div>

			<?php
	}}
	?>
	<h3 class="text-center block_title">Related Videos</h3>
	<?php
	echo do_shortcode('[video header="false"]');
?>
</div>
</div>
<?php get_footer(); ?>