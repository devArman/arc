/**
 * Created by Администратор on 6/8/2017.
 */
jQuery(document).ready(function(){
    jQuery('.center').slick({
        centerMode: true,
        centerPadding: '10000px',
        slidesToShow: 7,
        arrows: true,
        dots:false,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: true,
                    //centerPadding: '40px',
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    //centerPadding: '40px',
                    slidesToShow: 3
                }
            }
        ]

});
    jQuery('.video_slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: true,
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            }
        ]
    });
});
jQuery('.video_block .play_item').on('click',function(){
    jQuery('.video_block video').get(0).play();
    jQuery('.video_block video').attr('controls', 'controls');
    jQuery('.video_overlay').hide();
    jQuery(this).hide();

});
