/**
 * Created by seanmcdonnell on 3/4/17.
 */

var lastScrollY = 0,
    ticking = false,
    prlx1 = document.querySelector('.skyline.skyline--prlx-1'),
    prlx2 = document.querySelector('.skyline.skyline--prlx-2')
speedDividerPrlx1 = 2;
speedDividerPrlx2 = 3;

// Update scroll value and request tick
var doScroll = function () {
    lastScrollY = window.pageYOffset;
    requestTick();
};

window.addEventListener('scroll', doScroll, false);

var requestTick = function () {
    if (!ticking) {
        window.requestAnimationFrame(updatePosition);
        ticking = true;
    }
};

var updatePosition = function () {
    var translateValuePrlx1 = lastScrollY / speedDividerPrlx1,
        translateValuePrlx2 = lastScrollY / speedDividerPrlx2;

    // We don't want parallax to happen if scrollpos is below 0
    if (translateValuePrlx1 < 0) {
        translateValuePrlx1 = 0;
        translateValuePrlx2 = 0;
    }
    translateY3d(prlx1, translateValuePrlx1);
    translateY3d(prlx2, translateValuePrlx2);

    // Stop ticking
    ticking = false;
};

var translateY3d = function (elm, value) {
    var translate = 'translate3d(0px,' + -(value) + 'px, 0px)';
    elm.style['-webkit-transform'] = translate;
    elm.style['-moz-transform'] = translate;
    elm.style['-ms-transform'] = translate;
    elm.style['-o-transform'] = translate;
    elm.style.transform = translate;
}
