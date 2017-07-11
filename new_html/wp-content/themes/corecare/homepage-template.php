<?php
/**
 * Template Name: HomePage
 *
 **/
?>


<?php get_header(); ?>
<div class="container">
    <div class="full-width-left home_top_slider">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>

        <!--<div class="top_slider_text">
            <h2>
                Your heart <br> in good hands.
            </h2>
            <p>As trusted healthcare partners, the doctors and
                staff at CorCare are committed to the prevention,
                identification and management of heart disease.
            </p>
            <a href="javascript:void (0)" class="lilac_btn_default">FIND OUT NOW</a>
        </div> -->
    </div>
    <?php the_post();
            the_content();
    ?>
    <?php /*
        echo do_shortcode('[services]');
        echo do_shortcode('[aboutus]');
        echo do_shortcode('[carepart]');
        echo do_shortcode('[news]');
        echo do_shortcode('[video]');
    */ ?>
</div>

<?php get_footer(); ?>
