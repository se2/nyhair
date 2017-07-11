jQuery(document).ready(function($) {
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
        $('body').toggleClass('no-overflow');
        $('.dropdown-menu').toggleClass('open');
    });
});
