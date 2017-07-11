<?php get_header();?>
	<div class="default_page_template full-width-left">
		<div class="container">
			<h2 class="section_title">Events</h2>
			<?php
			if(have_posts()){
				while(have_posts()){
					the_post(); 
					$date = strtotime(get_field('date'));
					?>
					<div class="full-width-left block_with_shadow">
						<div class="small_wrapper clearfix">
							<div class="event_left_block">
								<div class="event_date_block text-center">
									<div class=" event_month">
										<span><?php echo date('F', $date);?></span>
									</div>
									<p><?php echo date('l', $date);?></p>
									<p class="event_day"><?php echo date('d', $date);?></p>
									<p><?php the_field('time');?></p>
								</div>

								<div class="subscribe_form">
								  <?php echo do_shortcode( '[contact-form-7 id="207" title="RSVP"]' ); ?>
								</div>
								<?php echo do_shortcode( "[social contactus='ts@mail.ru']" ); ?>
							</div>
							<div class="event_right_block">
								<h3 class="block_title" style="margin-top: 0"><?php the_title();?></h3>
								<?php the_content();?>
								
							</div>
							<div class="comments_part">
								<?php comments_template(); ?>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
			<h2 class="section_title">Upcoming Events</h2>
			<div class="full-width-left">
				<div class="small_wrapper clearfix ">
					<div class="row">
						<div class="upcoming_events_content">
						<?php 
							$time = time();
							$args_event = array('post_type'=>'event', 'posts_per_page'=>-1);
							$loop_event = new WP_Query($args_event);
							if($loop_event->have_posts()){
								while($loop_event->have_posts()){
									$loop_event->the_post();
								
										if(strtotime(get_field('date'))>time()){
											$date = strtotime(get_field('date'));
											?>
												<div class="col-md-6 col-sm-6 upcoming_events">
													<div class="upcoming_events_calendar">
														<div class="event_date_block text-center">
															<div class=" event_month">
																<span><?php echo date('F', $date);?></span>
															</div>
															<p><?php echo date('l', $date);?></p>
															<p class="event_day"><?php echo date('d', $date); ?></p>
														</div>
													</div>
													<div class="upcoming_event_description">
														<h3 class="block_title" style="margin-top: 0"><?php the_title();?></h3>
														<p><?php the_excerpt();?></p>
														<a href="<?php the_permalink();?>" class="lilac_btn_default">Learn More</a>
													</div>
												</div>
											<?php
										}
								}
							}
						?>
							
							
						</div>

					</div>

               </div>
			</div>
		</div>
	</div>

<?php get_footer();?>