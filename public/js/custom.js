/**
 * Created by seanmcdonnell on 1/24/17.
 */

// Hide Header on on scroll down

var didScroll,
    lastScrollTop = 0,
    delta = 5,
    $siteHeader = jQuery('.site-header');

jQuery(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 1);

function hasScrolled() {
    var st = jQuery(this).scrollTop(),
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
        if (st + jQuery(window).height() < jQuery(document).height()) {
            $siteHeader.removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}


jQuery(document).ready(function () {
    // Add smooth scrolling to all links
    jQuery("a.start-button, a.back-to-top").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, 700, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = '';
            });
        } // End if
    });
});
