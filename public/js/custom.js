/**
 * Created by seanmcdonnell on 1/24/17.
 */

// Hide Header on on scroll down

var didScroll,
    lastScrollTop = 0,
    delta = 5,
    $siteHeader = $('.site-header');

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 1);

function hasScrolled() {
    var st = $(this).scrollTop(),
        navBarHeight = $siteHeader.outerHeight();

    //Add class to header when scrolled to very top of page
    if ($siteHeader.offset().top < 10) {
        $siteHeader.addClass('top-of-page');
    } else {
        // Remove class when scrolled anywhere other than top of page
        $siteHeader.removeClass('top-of-page');
    }

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navBarHeight) {
        // Scroll Down
        $siteHeader.removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $siteHeader.removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}