/**
 * Created by seanmcdonnell on 2/4/17.
 */


// Enable parallax and fade effects on homepage sections
var $prlx1 = $(".skyline.skyline--prlx-1"),
    $prlx2 = $(".skyline.skyline--prlx-2"),
    $prlx3 = $(".skyline.skyline--prlx-3");

$(window).on('load resize', function () {
    $(window).on("scroll", function () {
        if ($(window).width() > 768) {
            scrolltop = $(window).scrollTop();
            scrollwindow = scrolltop + $(window).height();
            $prlx1.css({ transform: 'translate3d(0,' + -(scrolltop / 2) + 'px,0)' });
            $prlx2.css({ transform: 'translate3d(0,' + -(scrolltop / 3) + 'px,0)' });
            $prlx3.css({ transform: 'translate3d(0,' + -(scrolltop / 5) + 'px,0)' });
        }
    });
    $prlx1.css({ transform: 'translate3d(0, 0, 0)' });
    $prlx2.css({ transform: 'translate3d(0, 0, 0)' });
    $prlx3.css({ transform: 'translate3d(0, 0, 0)' });
});
