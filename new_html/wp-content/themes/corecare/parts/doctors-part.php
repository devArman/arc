<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<div class="our_doctors_section full-width-left block_with_shadow text-center">
    <h2 class="section_title"> Our Doctors</h2>
    <div class="center">
        <?php $doctors_args = array('post_type' => 'doctor', 'posts_per_page' => 10);
        $loop_doctors = new WP_Query($doctors_args);
        if($loop_doctors->have_posts()){
            while($loop_doctors->have_posts()){
                $loop_doctors->the_post();
                ?>
                <div>
                    <div class="our_doctors_block">
                        <div class="doctor_image"  style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>"></div>
                        <div class="add_item">
                            <a  href="<?php the_permalink();?>" >
                                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="text_block">
                        <p>
                            <?php the_excerpt();?>
                        </p>
                        <p class="doctor_name"><?php the_title();?></p>

                    </div>
                </div>

            <?php }}?>

    </div>

    <div class="full-width-left">
        <a href="<?php echo get_post_type_archive_link('doctor');?>" class="lilac_btn_default">Review All Our Doctors</a>
    </div>

</div>
