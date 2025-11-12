jQuery(function($) {
    // init Masonry
    var$grid = $('.grid').masonry({
    // options
        itemSelector: '.grid-item',
        columnWidth: '.sizer'
    });
    /* ---------------------------------------------- /*
      * Progress bar animations
     /* ---------------------------------------------- */

    $('.progress-bar').each(function(i) {
        $(this).appear(function() {
            var percent = $(this).attr('aria-valuenow');
            $(this).animate({'width' : percent + '%'});
            $(this).find('span').animate({'opacity' : 1}, 900);
            $(this).find('span').countTo({from: 0, to: percent, speed: 900, refreshInterval: 30});
        });
    });
});


