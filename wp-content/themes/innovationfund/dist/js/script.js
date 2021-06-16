$('.js-scroll-trigger').click(function () {
    var scrollName = $(this).attr('data-scroll'),
        scrollElem = $(scrollName),
        scrollTop = scrollElem.offset().top - 150;

    $('html, body').animate({
        scrollTop: scrollTop
    }, 500);
});