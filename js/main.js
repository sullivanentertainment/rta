
$(document).ready(function () {

    //=========MAIN CAROUSEL============//

    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true
    });


    //=========TWEEN MAX=========//



    //========COMPARISON SLIDER=========//



    $('.flip-container').click(function () {
        $(this).find('.flipper').toggleClass('flippedCard');
        $(this).find('.back').css({
            "z-index": "1000"
        })
        $(this).find('.question-mark').toggleClass('fadeOut')
    });

    $('.flip-container').mouseover(function () {
        $(this).find('flipper').addClass('flippedCard')
    })

    if ($(window).width() <= 800) {
        $('.hover-btn').html('Click to find out')
    }

    $(window).on('scroll', function () {
        if ($(this).scrollTop() >= 20) {
            $('body').addClass('scrolled');

        } else {
            $('body').removeClass('scrolled');

        }
    });

    if (!("ontouchstart" in document.documentElement)) {
        document.documentElement.className += " no-touch";
    }

    //========APPENDING TRAILERO ON FILMS============//

    $('#trailer1-btn').on('click', function (event) {
        event.preventDefault();
        $('#trailer1').append('<iframe src="https://embed.vhx.tv/videos/144761?color=804732&amp;autoplay=0&amp;sharing=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="true" allowfullscreen="true"></iframe>');
        $(this).css({
            "pointer-events": "none",
            "cursor": "default",
            "background": "#fff",
            "color": "$mainColor"
        })
        $(this).html('enjoy')
    });

    $('#trailer2-btn').on('click', function (event) {
        event.preventDefault();
        $('#trailer2').append('<iframe src="https://embed.vhx.tv/videos/157037?color=804732&amp;autoplay=0&amp;sharing=0" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>');
        $(this).css({
            "pointer-events": "none",
            "cursor": "default",
            "background": "#fff",
            "color": "$mainColor"
        })
        $(this).html('enjoy')
    });

    $('#trailer3-btn').on('click', function (event) {
        event.preventDefault();
        $('#trailer3').append('<iframe src="https://embed.vhx.tv/videos/157037?color=804732&amp;autoplay=0&amp;sharing=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>');
        $(this).css({
            "pointer-events": "none",
            "cursor": "default",
            "background": "#fff",
            "color": "$mainColor"
        })
        $(this).html('enjoy')
    });

    $('.trailer-wrapper iframe:nth-child(2)').remove();

    $('#trailer4-btn').on('click', function (event) {
        event.preventDefault();
        $('#trailer4').append('<iframe src="https://embed.vhx.tv/videos/157039?color=804732&amp;autoplay=0&amp;sharing=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>');
        $(this).css({
            "pointer-events": "none",
            "cursor": "default",
            "background": "#fff",
            "color": "$mainColor"
        })
        $(this).html('enjoy')
    });

    //==========END OF APPENDING TRAILERS=========//


    $('#watch-ep-btn').on('click', function () {
        $(this).text($(this).text() == 'Watch First Episode' ? 'Close Episode' : 'Watch First Episode');
        $('#first-ep').slideToggle("1200");
    });

    $('#post-392 .video-episode-list li:gt(2)').hide();
    $('#post-29975 .video-episode-list li:gt(2)').hide();
    $('#post-29980 .video-episode-list li:gt(2)').hide();
    $('#post-29992 .video-episode-list li:gt(2)').hide();
    $('#post-29994 .video-episode-list li:gt(2)').hide();
    $('#post-29997 .video-episode-list li:gt(2)').hide();
    $('#post-29990 .video-episode-list li:gt(2)').hide();

    $(document).scroll(function () {
        if ($(window).width() < 1024) {
            if ($(document).scrollTop() > 0) {
                $('.c-hero__background').css({
                    "background": "rgba(0,0,0,0)"
                })
            }
        } else {
            if ($(window).width() < 1024) {
                $('.c-hero__background').css({
                    "background": "rgba(0,0,0,0)"
                })
            }
        }

    });




    $('#main-list li:gt(2)').hide();
    $('.read-more').click(function () {
        var z = 2;
        if ($('.video-wrapper').length <= 3) {
            $('.read-more').text('Sorry there is no futher media');
        } else {
            $('#main-list li:gt(2)').slideToggle('900', 'swing');
            $(this).text($(this).text() == 'Watch More' ? 'Watch Less' : 'Watch More');
        }
    });

    $('#menu-item').on('click', function () {
        $(this).show();
        $(this).siblings().show();
    });

    //=========COSTUME STILLS FOR MOBILE (Behind the scenes)========//

    $('.costume-list li').hover(function () {
        $(this).find('.info').css({
            "bottom": "0"
        })
        $(this).siblings().find('.info').css({
            "bottom": "100%"
        })
    });

    $('.ep-content .read-btn-wrap a').on('click', function (e) {
        e.preventDefault();
        $('.hidden-p').slideToggle('900', 'swing');
        $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
    })

    //==============READ MORE BUTTON (Behind the scenes)=============//

    $('.read-more-seasons').click(function () {
        if ($('.vid-thumbnail').length <= 3) {
            $('.read-more-seasons').text('Sorry there is no futher media');
        } else {
            console.log('else')
            //  $('.video-episode-list li:gt(2)').slideToggle('900','swing');
            //  $(this).text($(this).text() == 'Watch More' ? 'Watch Less' : 'Watch More');
            $(this).parent().find('li:gt(2)').slideToggle('900', 'swing');
        }
    });

    //=========SMOOTH SCROLL==============//

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    }); //smooth-scroll function bracket

    $('.search-form').addClass('col-sm-6');

    $('.category-wrapper article').addClass('col-sm-6')





    //===========TWEEN MAX && SCROLL MAGIC ANIMATIONS============//

    TweenMax.to('.splash-btn-wrap a', 1.8, {
        top: 0,
        ease: Back.easeOut,
        opacity: 1
    })

    TweenMax.to('.blog-bg h2', 1.8, {
        top:0,
        ease: Back.easeOut,
    })

    // const controller = new ScrollMagic.Controller();
       
    //     var filmTween = TweenMax.staggerTo('.anne-info-wrapper', 0.7, {
    //         opacity: 1, delay: 2
    //     }, 0.2)

    //     var scene =  new ScrollMagic.Scene({
    //         triggerElement: '.anne-container'
    //     }).setTween(filmTween)
    //     .setPin(".anne-container", {pushFollowers: true})
    //     .addIndicators(true)
    // .addTo(controller);


  

    // const collectiblesTween = TweenMax.staggerTo('.collectible-cell', 0.7, {
    //     transform: 'translate(0)',
    //     opacity: 1,
    //     delay:2
    // }, 0.4)

    // const scene1 =  new ScrollMagic.Scene({
    //     triggerElement: '.anne-container'
    // }).setTween(collectiblesTween)
    //     .addTo(controller)



   

    // new ScrollMagic.Scene({
    //     triggerElement: '.collectible-slider'
    // }).setTween(collectiblesTween)
    //     .addTo(controller)

    

})