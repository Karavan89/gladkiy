(function($) {
    $(function() {

        $('#up').click(function() {
            $('html, body').animate({scrollTop: 0},500);
            return false;
        });

        $('.top-nav').click(function() {

            $('.top-nav').toggleClass('is-active');
            $(this).toggleClass('');

        });

        $('.sidebar-menu').click(function() {

            $('.sidebar-menu').toggleClass('is-active');
            $(this).toggleClass('');

        });

    })
})(jQuery);





