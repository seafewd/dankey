$(document).ready(function() {

//zoom+opacity effect
    $('.zooming').hover(function() {
        $(this).find('.zoom-child').each(function() {
            $(this).toggleClass('zoom-hover');
        });
    });
});