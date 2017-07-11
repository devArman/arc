<?php get_header();?>
<div class="default_page_template full-width-left">
	<div class="container">
				<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						?>
		            <div class="full-width-left block_with_shadow">
			           <div class="small_wrapper clearfix">
						<div class="doctor_image_part">
							<div class="profile_image" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>
							<?php echo do_shortcode( "[social contactus='ts@mail.ru']" ); ?>
							<p class="text-center">Contact Dr. <?php the_title();?></p>
							<?php echo do_shortcode( '[contact-form-7 id="204" title="contact doctor"]' ); ?>
						</div>
				        <div class="about_doctor_part">
						<h2 class="doctor_name">Dr. <?php the_title();?></h2>
							<p class="olive_color_text">
								"Ensuring my patients' physical well being is just half of my job. Their emotional health is
								very important, and I want to ensure that they leave here well informed, empowered and feeling valued".
							</p>
							<ul class="list-inline list-unstyled">
								<li>Age : <span>35</span></li>
								<li>Years Practicing: <span>8</span></li>
							</ul>
						 <?php the_content();?>
                        </div>
			         </div>
		            </div>


						<?php
					}
				}
				?>
		<div class="small_wrapper clearfix">
			<h3 class="block_title">Reviews</h3>
		</div>
		<div class="reviews_row full-width-left">
			<div class="small_wrapper clearfix">
				<h3>Jane Smith</h3>
				<p>"Lorem ipsum dolor sit amet, est ne dicat affert, eu suavitate liberavisse sed, an nam possim deleniti complectitur. Et quod adipisci quo,
					his periculis rationibus cu. Id vis mazim delenit, has epicuri mediocrem voluptaria ut,
					illum laboramus ius et. Mea ne illud nusquam efficiantur. Te vitae commodo mel, ea doming inimicus duo, te vim solum principes honestatis. Nonumes ancillae pri no."
				</p>
			</div>
		</div>
		<div class="reviews_row full-width-left">
			<div class="small_wrapper">
				<h3>Jane Smith</h3>
				<p>"Lorem ipsum dolor sit amet, est ne dicat affert, eu suavitate liberavisse sed, an nam possim deleniti complectitur. Et quod adipisci quo,
					his periculis rationibus cu. Id vis mazim delenit, has epicuri mediocrem voluptaria ut,
					illum laboramus ius et. Mea ne illud nusquam efficiantur. Te vitae commodo mel, ea doming inimicus duo, te vim solum principes honestatis. Nonumes ancillae pri no."
				</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>