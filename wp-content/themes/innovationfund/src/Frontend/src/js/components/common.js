// Scroll to anchor
$('.js-scroll-trigger').click(function () {
    let scrollName = $(this).attr('data-scroll'),
        scrollElem = $(scrollName),
        scrollTop = scrollElem.offset().top - 80;

    $('html, body').animate({
        scrollTop: scrollTop
    }, 500);
});