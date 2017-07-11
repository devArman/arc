<?php
add_action('wp_footer', 'script_and_style');
function script_and_style(){
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri()."/assets/css/bootstrap.min.css");
    wp_enqueue_style('fonts', get_stylesheet_directory_uri()."/assets/css/fonts.css");
    wp_enqueue_style('responsive', get_stylesheet_directory_uri()."/assets/css/responsive.css");
    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri()."/assets/css/font-awesome.css");
    wp_enqueue_style('slick', get_stylesheet_directory_uri()."/assets/css/slick.css");
    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri()."/assets/css/slick-theme.css");
    wp_enqueue_script('jquery', get_stylesheet_directory_uri()."/assets/js/jquery-2.1.4.min.js");
    wp_enqueue_script('custom', get_stylesheet_directory_uri()."/assets/js/custom.js");
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri()."/assets/js/bootstrap.min.js");
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri()."/assets/js/slick.min.js");
    wp_enqueue_script('bootstrap_date_js', get_stylesheet_directory_uri()."/assets/js/bootstrap-datepicker.min.js");
    wp_enqueue_style('bootstrap_date_css', get_stylesheet_directory_uri()."/assets/css/bootstrap-datepicker.min.css");
}

add_action('wp_head', 'add_functional');
function add_functional(){
    include(get_stylesheet_directory().'/parts/shortcodes.php');
    include(get_stylesheet_directory().'/functions/widgets.php');
}
add_filter('widget_text','do_shortcode');

add_action('wp_ajax_get_events', 'get_events');
add_action('wp_ajax_nopriv_get_events', 'get_events');
function get_events(){
    $events = array();
    $args = array('post_type'=>'event');
    $loop = new WP_Query($args);
    $count = 0;
    if($loop->have_posts()){
        while($loop->have_posts()){
            $loop->the_post();
            if(date('Y-n-d', strtotime(get_field('date')))==$_POST['date']){
                
                $title = get_the_title($loop->get_the_id());
                $excerpt = get_the_excerpt();
                $time = get_field('time');
                $link = get_the_permalink();
                $event = array(
                    'title'=>$title,
                    'excerpt'=>$excerpt,
                    'time'=>$time,
                    'link'=>$link
                    ); 
                array_push($events, $event);

            }
            
        }
    }
   
    $events = json_encode($events);
   echo $events;
    wp_die();
}
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );