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
        //autoplay: true,
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
    jQuery('#calendar div').datepicker({
        todayHighlight: true,
        multidate: false
    }).on('changeDate', function (e) {
         var date = jQuery(this).datepicker('getDate');
         var weekindex = date.getUTCDay();
        var weekdays = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ];
    jQuery('.today_week_day').text(weekdays[weekindex]);
    jQuery('.today_date').text(date.getDate());
         console.log(e);
              var ajaxurl = "/wp-admin/admin-ajax.php";
            /*var time = date.getTime()/1000;*/
            var day = date.getDate();
            var month = date.getMonth()+1;
            var year = date.getFullYear();
            time = year+"-"+month+"-"+day;
            var data = {
                'action' : 'get_events',
                'date' : time
            };
            jQuery.post(ajaxurl, data, function(response){
                var obj = jQuery.parseJSON(response);
                jQuery('.full-width-left.today_events_list').html('<br><p class="text-center" id="noev">There are no events!</p>');
                jQuery.each(obj, function(key, value){
                    
                    jQuery('.full-width-left.today_events_list').prepend('<div class="full-width-left"><h3>'+value.title+'</h3><p>'+value.excerpt+'</p><a href="'+value.link+'" class="lilac_btn_default">Read More</a></div><style> #noev{display:none;} </style>');
                    /*console.log(key+":"+value.title);*/
                });      
            });
    });;

    jQuery('.calendar_box .datepicker .next').html('<i class="fa fa-caret-right" aria-hidden="true"></i>');
    jQuery('.calendar_box .datepicker .prev').html('<i class="fa fa-caret-left" aria-hidden="true"></i>');
});
jQuery('.video_block .play_item').on('click',function(){
    jQuery('.video_block video').get(0).play();
    jQuery('.video_block video').attr('controls', 'controls');
    jQuery('.video_overlay').hide();
    jQuery(this).hide();

});
//jQuery('.menu-toggle').empty();
jQuery('.menu-toggle').html('<i class="fa fa-bars" aria-hidden="true"></i>');

jQuery('.calendar_box .datepicker .next').html('<i class="fa fa-caret-right" aria-hidden="true"></i>');
jQuery('.calendar_box .datepicker .prev').html('<i class="fa fa-caret-left" aria-hidden="true"></i>');

jQuery('.search_item').on('click',function(){
    jQuery('.mobile_search_item').toggle();
});

jQuery(document).ready(function(){
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('.scroll_to_top').fadeIn();
        } else {
            jQuery('.scroll_to_top').fadeOut();
        }
    });
    jQuery('.scroll_to_top').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });
});
