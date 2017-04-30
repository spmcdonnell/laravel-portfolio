/**
 * Created by seanmcdonnell on 2/4/17.
 */


    // Enable parallax and fade effects on homepage sections
(function() {
    if($(window).width() > 768) {
        $(window).on("load scroll", function () {

            var $prlx1 = $(".skyline.skyline--prlx-1"),
                $prlx2 = $(".skyline.skyline--prlx-2"),
                $prlx3 = $(".skyline.skyline--prlx-3"),
                $prlx4 = $(".skyline.skyline--prlx-4");
            scrolltop = $(window).scrollTop();
            scrollwindow = scrolltop + $(window).height();

            //$prlx1.css({transform: 'translate3d(0,' + Math.round((scrolltop / 8)) + 'px,0)'});
            //if(scrolltop < 830) {
            $prlx1.css({transform: 'translate3d(0,' + -(scrolltop / 2) + 'px,0)'});

            $prlx2.css({transform: 'translate3d(0,' + -(scrolltop / 3) + 'px,0)'});

            //}
        });
    }
})()
