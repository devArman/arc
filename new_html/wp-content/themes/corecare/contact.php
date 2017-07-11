<?php
/**
* Template Name: Contact Map
**/
?>
<?php get_header();?>
<div class="default_page_template full-width-left">
	<div class="container">
<?php 
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
	}
}
?>
	</div>
</div>

<?php get_footer();?>


