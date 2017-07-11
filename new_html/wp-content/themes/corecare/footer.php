<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="scroll_to_top"> <i class="fa fa-caret-up" aria-hidden="true"></i> </div>
		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer full-width-left" role="contentinfo">
			<div class="container">

				<?php dynamic_sidebar( 'footer' ); ?>
				<div class="site-info full-width-left">

					<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
					?>
<!--					<span class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></span>-->
					<p class="text-center">&copy; 2017 CorCare Inc. All rights reserved.</p>
<!--					<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?><!--</a>-->
				</div>
			</div>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
