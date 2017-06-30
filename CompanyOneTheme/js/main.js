/*globals jQuery*/
(function($){
    'use strict';

    function quotesCarousel(){
        var quotesCarousel = $('#quotesCarousel'),
            $quoteContainer = $('#quotesCarousel .item'),
            carouselHeight = 0;
        quotesCarousel.height('auto');

        $quoteContainer.each(function(){
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

    // var myanim = new Image();
    // myanim.src = 'http://companyoneband.com/img/20161104_220948_001-ANIMATION.gif';
    // myanim.onload = function() {
    //     document.getElementById('heroImg').src = myanim.src;
    // };


    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#navbar ul.nav li a').click(function () {
            $('button.navbar-toggle').click();
        });
    }

    $('#navbar').on('activate.bs.scrollspy', function () {
        var active = $(this).find('.active'),
            id, anchor;
        if(active.next('li').length !== 0) {
            anchor = active.next('li').find('a');
            id = anchor.attr('href');
            pageLoad(id);
        }
    });

    $('#navbar a, .sub-navigation a, .navbar-brand').click(function(e){
        var id = $(this).attr('href');
        pageLoad(id, this, e);
    });

    function pageLoad(id, anchor = false , e = false){
        var container = $(id),
            containerContent = container.html(),
            pageName = id.substr(id.indexOf("-") + 1);

        if(container.length === 1 && containerContent === ''){
            container.button('loading');
            if(anchor !== false){
                $.ajax({
                    url: '/' + pageName + id,
                    context: container
                }).success(function(html) {
                    container.html(html);
                    smoothScroll(anchor, e)
                });
            }
            else{
                container.load('/' + pageName + id);
            }
        }

        if(anchor !== false){
            smoothScroll(anchor, e);
        }
    }

    function smoothScroll(anchor, e) {            // Add smooth scrolling to all links

        // Make sure this.hash has a value before overriding default behavior
        if (anchor.hash !== "") {
            // Prevent default anchor click behavior
            e.preventDefault();
            // Store hash
            var hash = anchor.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 50
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    }


    // function runIt() {
    //     var baloon = $('.current-event');
    //     baloon.animate({opacity:'1'}, 1000);
    //     baloon.animate({opacity:'0.5'}, 1000, runIt);
    // }
    // runIt();

    // function isDateBeforeToday(date) {
    //     return new Date(date.toDateString()) < new Date(new Date().toDateString());
    // }
    //
    // $('.dt-start').each(function(){
    //     var gigDate = $(this).attr('datetime'),
    //         dateCheck = isDateBeforeToday(new Date(gigDate)),
    //         parentHTML = $(this).parent('.h-event').html();
    //
    //     if(dateCheck === true){
    //         $(this).parent().wrap("<del></del>");
    //     }
    //
    // });
})(jQuery);
