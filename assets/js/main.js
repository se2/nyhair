jQuery(document).ready(function($) {
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');

        $('body').toggleClass('no-overflow');
        $('html').toggleClass('no-overflow');

        $('.page-body').toggleClass('hidden-s');
        $('.home-body').toggleClass('hidden-s');
        $('footer').toggleClass('hidden-s');

        $('.upper-header').toggleClass('header-fixed');
        $('.header-home').toggleClass('header-fixed');

        $('.dropdown-menu').toggleClass('open');
    });
});
