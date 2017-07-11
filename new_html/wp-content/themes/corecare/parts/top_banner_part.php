<?php require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");?>
<?php if($img==''){
    $img = '/assets/images/services-banner.png';
}
?>
<div class="page_top_banner" style="background-image: url('<?php echo get_stylesheet_directory_uri().$img;?>')" >
            <div class="banner_text_block">
            <?php if($header!=''){ ?>
            <h2><?php echo $header ?></h2>
            <?php } else {?>

                <h2>Our Services</h2>
                <?php }?>
                <p>
                <?php if($content!=''){echo $content;} else {?>
                    !!CorCare offers the highest quality cardiac care services, providing
                    rapid patient access to advanced diagnostic testing, nuclear testing,
                    and consultation.  This approach and our integration with the community health care network, means that our patients' are diagnosed, and their
                    treatments can begin quickly and seamlessly. This is a key factor to
                    ensuring the best possible outcome for all of our patients.
                    <?php }?>
                </p>
            </div>
        </div>