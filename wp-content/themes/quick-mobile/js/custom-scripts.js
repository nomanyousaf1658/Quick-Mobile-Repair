jQuery(document).ready(function () {
    windowWidth = jQuery(window).width();
    if (windowWidth < 768) {
        jQuery('body').addClass('sticky-menus');
        if ((jQuery("body").hasClass('page-id-16')) || jQuery("body").hasClass('page-id-2179')) {
            jQuery('html, body').animate({
                scrollTop: jQuery("#main").offset().top - 50
            }, 1000);
        }
    } else {
        jQuery('body').removeClass('sticky-menus');
    }
});

