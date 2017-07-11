<?php/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 */
?>
 <?php get_header();?>
<div class="default_page_template full-width-left" >
<div class="container">
<?php
	the_post();
	the_content();
 ?>
</div>
</div>
<?php get_footer();?>