function initialize(lat, lng) {
    var myLatlng = new google.maps.LatLng(lat, lng);
    var mapOptions = {
        zoom: 16,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: ''
    });
}
function sliderHeight() {
    if ($(".video-item").length) {
        var height = ($(".video-item").width()) * .747;
        $('.video-item').css({'height': height});
    }
}
function marginBottom() {
    if ($(".projects__i").length) {
        var marginRight = $(".projects__i").css("marginRight");
        $(".projects__i").css({"margin-bottom": marginRight});
        console.log(marginRight);
    }
}


$(window).resize(function () {
    sliderHeight();
    marginBottom();
});

$(window).load(function () {
    sliderHeight();
    marginBottom();
});

jQuery(document).ready(function ($) {
    if ($("#map").length) {
        initialize($("#map").data('lat'), $("#map").data('lng'));
    }

    var delay = 1000;
    $('#to-top').click(function () {

        $('body, html').animate({
            scrollTop: 0
        }, delay);
    });

    $('.nav-main > ul li').hover(function () {
        $(this).find('> ul').stop().fadeIn(300);
    }, function () {
        $(this).find('> ul').stop().fadeOut(300);
    });

    $('.overlayElementTrigger').on('click', function () {
        if ($('.overlay-forms').is(':visible')) {
            $('.of-form').stop().fadeOut();
        } else {
            $('.overlay-forms').stop().fadeIn();
        }

        $('.' + $(this).data('selector')).stop().fadeIn();
    });

    $('.form-overlay').on('click', function () {
        $('.of-form').stop().fadeOut();
        $('.overlay-forms').stop().fadeOut();
        if ($('.popup.youtube').length) {
            $('.youtube .video-container').find('iframe').attr('src', '');
            $('.popup.youtube').hide();
        }
    });

    $('.of-close').on('click', function () {
        $('.of-form').stop().fadeOut();
        $('.overlay-forms').stop().fadeOut();
        if ($('.popup.youtube').length) {
            $('.youtube .video-container').find('iframe').attr('src', '');
            $('.popup.youtube').hide();
        }
    });

    $('.add-otziv').on('click', function () {
        if ($(this).hasClass('active')) {
            $(".form").slideUp();
            $(this).toggleClass('active');
        }
        else {
            $(".form").slideDown();
            $(this).toggleClass('active');
        }
    });

    var slide = $("#slider");
    slide.owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 1,
        singleItem: true,
        responsive: true,
        responsiveRefreshRate: 1,
        pagination: true,
        navigationText: false,
        autoPlay: 5000,
        transitionStyle: "fade"
    });
    $("#transitionType").change(function () {
        var newValue = $(this).val();

        //TransitionTypes is owlCarousel inner method.
        slide.data("owlCarousel").transitionTypes(newValue);
        slide.trigger("owl.play");
    });

    var footerHeight = $("footer").outerHeight();
    $("footer").css({'margin-top': -footerHeight});
    $(".clearfix-footer").css({'height': footerHeight});

    var slideAbout = $(".about-slider");
    slideAbout.owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 4,
        responsive: true,
        responsiveRefreshRate: 1,
        pagination: true,
        navigationText: false,
        autoPlay: false
    });

    $('.of-show').on('click', function () {
        if ($(this).hasClass('active')) {
            $(".of-textarea").slideUp();
            $(this).toggleClass('active');
        }
        else {
            $(".of-textarea").slideDown();
            $(this).toggleClass('active');
        }
    });

    $(".phone_mask").mask("(999) 999-99-99");

    $('a[href^="#"]').click(function () {
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top
        }, 2000);
        return false;
    });

});	
	