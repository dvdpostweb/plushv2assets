$.fn.toggleText = function(t1, t2){
    if (this.html() == t1) this.html(t2);
    else                   this.html(t1);
    return this;
};

$(document).ready(function () {
    //preload all content
    $('body').waitForImages(function () {
        setTimeout(function () {
            $('body').addClass('show');
        }, 500);
    })

    //top search state events
    $(".fa-search").on('click', function () {
        $("#search-top-holder").toggleClass('active');
    })

    $("#scroll-down").on('click', function (event) {
        $('html, body').stop().animate({
            scrollTop: $('#home-anchr').offset().top
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
    })

    // scroll top -> on top
    $('#on-top').affix({
        offset: {
            top: 380
        }
    })
    $('#on-top').on('click', function (event) {
        $(this).removeClass('affix');
        $('html, body').animate({scrollTop: 0}, '500');
    });




    //sidebar scroll
    // $("#sidebar").mCustomScrollbar();

    //parallax scroll(not mobile)

    // if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
    //     skrollr.init({
    //         forceHeight: false,
    //         edgeStrategy: 'set'
    //     });
    // }

    //trigg adaptive menu overlay
    $('.button-container').on("click", function () {
        $(this).toggleClass("toggle active");
        $('#overlay').toggleClass('open');
        $('#navbar-fancy').toggleClass('active');
        $('body').toggleClass('overlayed');

    });

    //close adaptive menu overlay on esc
    $(document).keyup(function (e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            $('#overlay').removeClass('open');
            $('#navbar-fancy').removeClass('active');
            $('.button-container').removeClass("active").addClass("toggle");
            $("#search-top-holder").removeClass('active');
        }
    });


});
