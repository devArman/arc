<?php get_header();?>
	<div class="default_page_template full-width-left">
	<div class="container">
		<h2 class="section_title">NEWS</h2>
	<div class="news_left_part single_news">
		<div class="full-width-left block_with_shadow">
			<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
					?>
					<?php the_post_thumbnail()?>
					<h3 class="block_title"><?php the_title()?></h3>
					<?php the_content();?>
					<?php
				}
			}
			?>

			<?php echo do_shortcode( "[social contactus='ts@mail.ru']" ); ?>
		</div>
		<div class="comments_part">
			<?php comments_template(); ?>
		</div>

	</div>
		<div class="news_right_part">
			<div class="videos_section">
				<div class="subscribe_form">
				  <?php echo do_shortcode( '[contact-form-7 id="206" title="Subscribe"]' ); ?>
				</div>
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
	    </div>

</div>
</div>
<?php get_footer();?>