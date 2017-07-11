<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage corcare
 * @since corcare 1.0
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="full-width-left home_top_slider">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>

        <div class="top_slider_text">
            <h2>
                Your heart <br> in good hands.
            </h2>

            <p>As trusted healthcare partners, the doctors and
                staff at CorCare are committed to the prevention,
                identification and management of heart disease.
            </p>
            <a href="javascript:void (0)" class="lilac_btn_default">FIND OUT NOW</a>
        </div>
    </div>


    <div class="block-our-services full-width-left block_with_shadow">
        <h2 class="section_title">Our Services</h2>

        <div class="block-all">
            <div class="block-health">
                <div class="bg-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cardiac.png" alt=""></div>
                <h3>Cardiac Management</h3>

                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                    Ut envelit esse cillum
                </p>
                <a href="#" class="lilac_btn_default">Read More</a>
            </div>
            <div class="block-health">
                <div class="bg-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nuclear.png"
                                           alt=""></div>
                <h3>Nuclear Medicine</h3>

                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut envelit esse cillum
                </p>
                <a href="#" class="lilac_btn_default">Read More</a>
            </div>
            <div class="block-health">
                <div class="bg-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/corcare.png"
                                           alt=""></div>
                <h3>Corcare Difference</h3>

                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut envelit esse cillum
                </p>
                <a href="#" class="lilac_btn_default">Read More</a>
            </div>
        </div>
    </div>
    <div class="main-about full-width-left">
        <div class="block-about-us block_with_shadow full-width-left">
            <h2 class="section_title">About Us</h2>
            <div class="block-all-about">
                <div class="block-our">
                    <div class="box-our"  style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/love.png')">
                        <div class="box-circle-img">
                            <div>
                                <img class="img-smallhearth block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/smallhearth.png" alt="small hearth">
                            </div>
                        </div>
                    </div>
                    <div class="block-our-text">
                        <h3>Our Mission</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                        <a href="#" class="main_link">Read More</a>
                    </div>
                </div>
                <div class="block-our">
                    <div class="box-our" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/doctor.png')">
                        <div class="box-circle-img">
                            <div>
                                <img class="img-man block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/man.png" alt="man">
                            </div>
                        </div>
                    </div>
                    <div class="block-our-text">
                        <h3>Our Doctors</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                        <a href="#" class="main_link">Learn More</a>
                    </div>
                </div>
                <div class="block-our">
                    <div class=" box-our" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/calendar.png')">
                        <div class="box-circle-img">
                            <div>
                                <img class="img-date block-our-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/date.png" alt="date">
                            </div>
                        </div>
                    </div>
                    <div class="block-our-text">
                        <h3>Events</h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                        <a href="#" class="main_link">See More</a>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>

    </div>
    <div class="patient_care_section full-width-left block_with_shadow">
        <h2 class="section_title">Patient Care</h2>
        <div class="col-md-12">
            <div class="patient_care clearfix">
                <div class="blocks left_block">
                    <h3>The CorCare
                        Patient Experience</h3>
                    <a href="javascript:void (0)" class="lilac_btn_default">Learn More</a>
                </div>
                <div class="blocks right_block">
                    <h3>What you need to know
                        about Cardiac Care tests</h3>
                    <a href="javascript:void (0)" class="lilac_btn_default">Learn More</a>
                </div>
                <div class="blocks left_block">
                    <h3>What you need to know
                        about Nuclear Medicine tests</h3>
                    <a href="javascript:void (0)" class="lilac_btn_default">Learn More</a>
                </div>
                <div class="blocks right_block">
                    <h3>Download our latest
                        PDF Forms</h3>
                    <a href="javascript:void (0)" class="lilac_btn_default"> Download</a>
                </div>

                <div class="patient_care_center">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Patient_Care.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="our_doctors_section full-width-left block_with_shadow text-center">
        <h2 class="section_title"> Our Doctors</h2>
        <div class="center">
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 1</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 2</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 3</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 4</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 5</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 6</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 7</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
            <div>
                <div class="our_doctors_block">
                    <div class="doctor_image"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/doctor1.png')"></div>
                    <div class="add_item">
                        <a  href="javascript:void (0)" >
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
                <div class="text_block">
                    <p class="about_doctor">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla,
                        arcu eget blandit fringilla, felis lorem laoreet est, id interdum est dui ut lorem.
                        Vivamus molestie nibh magna, at porttitor urna cursus eu.
                    </p>
                    <p class="doctor_name">JOHN SMITH 8</p>
                    <p>Doctor Since 2008</p>
                </div>
            </div>
        </div>

        <div class="full-width-left">
            <a href="javascript:void (0)" class="lilac_btn_default">Review All Our Doctors</a>
        </div>

    </div>
    <div class="main-news full-width-left">

            <div class="block-news full-width-left block_with_shadow ">
                <h2 class="section_title">News</h2>
                <div class="block-news-health">
                    <div class="box-tips">
                        <div class="box-tips-img" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/biglove.png')">
                            <div class="box-circle-img">
                                <div>
                                    <img class="img-circle block-news-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/circle.png" alt="circle">
                                </div>

                            </div>
                        </div>
                        <div class="block-news-text">
                            <h3>Health Care Tips</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum sit amet nibh quis scelerisque. Sed ullamcorper, elit et...
                            </p>
                            <a href="#" class="main_link">Read More</a>
                            <div class="box-information">
                                <span>By John Smith - 12 January, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-tips">
                        <div class="box-tips-img" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/biglove.png')">
                            <div class="box-circle-img">
                                <div>
                                    <img class="img-circle block-news-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/circle.png" alt="circle">
                                </div>
                            </div>
                        </div>
                        <div class="block-news-text">
                            <h3>Health Care Tips</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum sit amet nibh quis scelerisque. Sed ullamcorper, elit et...
                            </p>
                            <a href="#" class="main_link">Read More</a>
                            <div class="box-information">
                                <span>By John Smith - 12 January, 2017</span>
                            </div>
                        </div>
                    </div>

                    <div class="box-tips">
                        <div class="box-tips-img" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/biglove.png')">
                            <div class="box-circle-img">
                                <div>
                                    <img class="img-circle block-news-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/circle.png" alt="circle">
                                </div>
                            </div>
                        </div>
                        <div class="block-news-text">
                            <h3>Health Care Tips</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum sit amet nibh quis scelerisque. Sed ullamcorper, elit et...
                            </p>
                            <a href="#" class="main_link">Read More</a>
                            <div class="box-information">
                                <span>By John Smith - 12 January, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <div class="videos_section full-width-left text-center ">
        <h2 class="section_title"> Educational Videos</h2>
         <div class=full-width-left">
             <div class="video_slider">
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
                 <div>
                     <div class="video_block">
                         <div class="video_content">
                             <video width="100%">
                                 <source src="<?php echo get_stylesheet_directory_uri();?>/assets/videos/video1.mp4" type="video/mp4">
                             </video>
                             <div class="video_overlay"></div>
                             <span class="play_item"><i class="fa fa-play" aria-hidden="true"></i></span>
                         </div>
                         <h4>Heart Health Tips</h4>
                     </div>
                 </div>
             </div>
         </div>
        <div class=full-width-left">
         <a href="#" class="lilac_btn_default">View All Videos</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
