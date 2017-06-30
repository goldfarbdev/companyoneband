/*globals jQuery*/
(function($){
    'use strict';

    // $(function() {
    //
    //
    //     //Gets the iframe by id
    //     var iframe = $('#PLAYER1');
    //     //Creates a player var using the iframe
    //     var player = new Vimeo.Player(iframe);
    //     $('#iframeModal').modal('show');
    //     $('#iframeModal').on('shown.bs.modal', function(){
    //         iframeResize($('#PLAYER1'))
    //         player.play();
    //     });
    //
    //
    //     player.on('ended', function() {
    //         $('#iframeModal').modal('hide');
    //     });
    // });

    $('#co1-tour .btn-action').click(function(){
       var iframeSrc = $(this).data('src'),
           target = $(this).data('target');

        if(target === '#iframeModal'){
            $('#iframeModal iframe').attr('src', iframeSrc);

        }

    });
    $('#iframeModal').on('hidden.bs.modal', function () {
        $(this).find('iframe').attr('src', '');
    });

    function quotesCarousel(){
        var quotesCarousel = $('#quotesCarousel'),
            $quoteContainer = $('#quotesCarousel .item'),
            carouselHeight = 0;
        quotesCarousel.height('auto');

        $quoteContainer.each(function(i){
            var quoteHt = $(this).height();
            if($(this).hasClass('active')){
                $(this).addClass('currently-active');
            }
            else{
                $(this).addClass('active');
            }
            if(quoteHt > carouselHeight){
                carouselHeight = quoteHt;
            }

            if($(this)[0] === $quoteContainer.last()[0]){
                quotesCarousel.height(carouselHeight);
                $('.active:not(".currently-active")').removeClass('active');
                $('.currently-active').removeClass('currently-active');
            }
        });


    };
    quotesCarousel();
    $(window).resize(function(){
        var iframe = $('#PLAYER1');
        iframeResize(iframe);
        quotesCarousel();
        iframeResize($('.teaser'));
    });

    function iframeResize(iframe){
      var calc = 0.56239316239316,
          iframeWidth = $(iframe).parent().width(),
          iframeHeight = calc*iframeWidth;

        $(iframe).height(iframeHeight);
    };
    iframeResize($('.teaser'));


    function runIt() {
        var baloon = $('.current-event');
        baloon.animate({opacity:'1'}, 1000);
        baloon.animate({opacity:'0.5'}, 1000, runIt);
    }
    runIt();

    var myanim = new Image();
    myanim.src = 'http://companyoneband.com/img/20161104_220948_001-ANIMATION.gif';
    myanim.onload = function() {
        document.getElementById('heroImg').src = myanim.src;
    };

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#navbar ul.nav li a').click(function () {
            $('button.navbar-toggle').click();
        });

    }

    function isDateBeforeToday(date) {
        return new Date(date.toDateString()) < new Date(new Date().toDateString());
    }

    $('.dt-start').each(function(){
        var gigDate = $(this).attr('datetime'),
            dateCheck = isDateBeforeToday(new Date(gigDate)),
            parentHTML = $(this).parent('.h-event').html();

        if(dateCheck === true){
            $(this).parent().wrap("<del></del>");
        }

    });
})(jQuery);
