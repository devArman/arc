<?php
function news_shortcode(){
	ob_start();
    $news = include(get_stylesheet_directory().'/parts/news-part.php');
     $output = ob_get_clean();
    return $output;
}
add_shortcode('news', 'news_shortcode');

function doctors_shortcode(){
	ob_start();
   include(get_stylesheet_directory().'/parts/doctors-part.php');
     $output = ob_get_clean();
    return $output;
}
add_shortcode('doctors', 'doctors_shortcode');

function aboutus_shortcode($atts){
$args = shortcode_atts(
	array(
			'header'=>'true'
		), $atts
	);
$header = $args['header'];
ob_start();
    require_once(get_stylesheet_directory().'/parts/aboutus-part.php');
    $output = ob_get_clean();
    return $output;
    
}
add_shortcode('aboutus', 'aboutus_shortcode');

function carepart_shortcode(){
	ob_start();
	include(get_stylesheet_directory().'/parts/care-part.php');
	 $output = ob_get_clean();
    return $output;
}
add_shortcode('carepart', 'carepart_shortcode');

function video_shortcode($atts){
	$args = shortcode_atts(
	array(
			'header'=>'true'
		), $atts
	);
$header = $args['header'];
	ob_start();
	$video = include(get_stylesheet_directory().'/parts/video-part.php');
	 $output = ob_get_clean();
    return $output;
}
add_shortcode('video', 'video_shortcode');

function service_shortcode($atts){
	$args = shortcode_atts(
	array(
			'header'=>'true'
		), $atts
	);
	$header = $args['header'];
	ob_start();
	include(get_stylesheet_directory().'/parts/service-part.php');
	 $output = ob_get_clean();
    return $output;
}
add_shortcode('services', 'service_shortcode');

function fullcarepart_shortcode(){

	ob_start();
	$carepart = include(get_stylesheet_directory().'/parts/full-care-part.php');
	 $output = ob_get_clean();
    return $output;
}
add_shortcode('fullcarepart', 'fullcarepart_shortcode');

function social_shortcode($atts){
	$args = shortcode_atts(array(
	'contactus'=>'', 
	'ln'=>'https://linkedin.com', 
	'tw'=>'https://twitter.com', 
	'fb'=>'https://facebook.com', 
	'pt'=>'https://www.pinterest.com/'
	), $atts);
	ob_start();
	?><ul class="list-inline list-unstyled social_icons">
                        <li><a target="_blank" href="mailto:<?php echo $args['contactus']; ?>"><i class="fa fa-at" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $args['ln']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="<?php echo $args['tw']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $args['fb']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $args['pt']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                    <?php
return ob_get_clean();
}
add_shortcode('social', 'social_shortcode');

function top_banner_shortcode($atts){
	$args = shortcode_atts(array(
		'header' => '',
		'content' => '',
		'img' => ''
		), $atts);
	$header = $args['header'];
	$content = $args['content'];
	$img = $args['img'];
	$top_banner = include(get_stylesheet_directory().'/parts/top_banner_part.php');
}
add_shortcode('topbanner', 'top_banner_shortcode');

function right_sidebar_videos (){
	ob_start();
	require_once(get_stylesheet_directory().'/parts/right-sidebar-videos.php');
	$out = ob_get_clean();
	return $out;
}
add_shortcode('videowidget', 'right_sidebar_videos');

function careers_part (){
	ob_start();
	require_once(get_stylesheet_directory().'/parts/careers-part.php');
	$out = ob_get_clean();
	return $out;
}
add_shortcode('career', 'careers_part');