function initialize() {
  var myLatlng = new google.maps.LatLng(50.4469359,30.4641351);
  var mapOptions = {
	zoom: 16,
	center: myLatlng
  }
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: ''
  });
}	
function sliderHeight() {	
	if ($(".video-item").length){	
		var height = ($(".video-item").width())*.747; 	
		$('.video-item').css({'height' : height});
	}
}
function marginBottom() {	
	if ($(".projects__i").length){	
		var marginRight = $(".projects__i").css("marginRight");
		$(".projects__i").css({"margin-bottom": marginRight});
		console.log(marginRight);
	}
}


$(window).resize(function() {
	sliderHeight();
	marginBottom();
});

$(window).load(function(){
	sliderHeight();
	marginBottom();
});

jQuery(document).ready(function($) {
	if ($("#map").length)
	{
		initialize();
	}	

	var delay = 1000;
  $('#to-top').click(function () {

    $('body, html').animate({
      scrollTop: 0
    }, delay);
  }); 

	$('.nav-main > ul li').hover(function() {
		$(this).find('> ul').stop().fadeIn(300);
	}, function() {
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
	
	$('.form-overlay').on('click', function() {
		$('.of-form').stop().fadeOut();
		$('.overlay-forms').stop().fadeOut();
		if($('.popup.youtube').length)	{
			$('.youtube .video-container').find('iframe').attr('src', '');	
			$('.popup.youtube').hide();
		}
	});	
	
	$('.of-close').on('click', function() {
		$('.of-form').stop().fadeOut();
		$('.overlay-forms').stop().fadeOut();
		if($('.popup.youtube').length)	{
			$('.youtube .video-container').find('iframe').attr('src', '');	
			$('.popup.youtube').hide();
		}
	});	
	
	$('.add-otziv').on('click', function() {
		if( $(this).hasClass('active'))	{
			$(".form").slideUp();
			$(this).toggleClass('active');
		}
		else{
			$(".form").slideDown();
			$(this).toggleClass('active');			
		}
	});	

  var slide = $("#slider");
 	slide.owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		items : 1,
		singleItem : true,
		responsive: true,
		responsiveRefreshRate: 1,
		pagination: true,
		navigationText: false,
		navigation: true,
		autoPlay: 5000,
		transitionStyle : "fade"
	});
  $("#transitionType").change(function(){
	var newValue = $(this).val();

	//TransitionTypes is owlCarousel inner method.
	slide.data("owlCarousel").transitionTypes(newValue);
	slide.trigger("owl.play");
  });

	var footerHeight =$("footer").outerHeight();
	$("footer").css({'margin-top': -footerHeight});
	$(".clearfix-footer").css({'height': footerHeight});	

  var slideAbout = $(".about-slider");
 	slideAbout.owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		items : 4,
		responsive: true,
		responsiveRefreshRate: 1,
		pagination: true,
		navigationText: false,
		navigation: true,
		autoPlay: false
	});

	$('.of-show').on('click', function() {
		if( $(this).hasClass('active'))	{
			$(".of-textarea").slideUp();
			$(this).toggleClass('active');
		}
		else{
			$(".of-textarea").slideDown();
			$(this).toggleClass('active');			
		}
	});	

	$(".of-submit-form").click(function() {
		console.log(1);
		var name = $(this).parents().children(".of-input_name");
		if($.trim(name.val()) == "") {
			name.addClass("form_error");
			return false;
		}
		else{
			name.removeClass("form_error");
		}
		
		var phone = $(this).parents().children(".of-input_phone");
		if($.trim(phone.val()) == "") {
			phone.addClass("form_error");
			return false;
		}
		else{
			phone.removeClass("form_error");
		}

		if ($('.overlay-forms').is(':visible')) {		
			//$('.form-order').hide();
			phone.val("");
			name.val("");
			//$('.form-thanks').show();
		}
		else{
			//$('.overlay-forms').show();
			phone.val("");
			name.val("");

			//$('.form-thanks').show();
		}

	});

	$(".form__btn__contacts").click(function() {
		var name = $(this).parents().children(".form__input_name");
		if($.trim(name.val()) == "") {
			name.addClass("form_error");
			return false;
		}
		else{
			name.removeClass("form_error");
		}
		
		var phone = $(this).parents().children(".form__input_email");
		if($.trim(phone.val()) == "") {
			phone.addClass("form_error");
			return false;
		}
		else{
			phone.removeClass("form_error");
		}
		
		var mess = $(this).parents().children(".form__textarea");
		if($.trim(mess.val()) == "") {
			mess.addClass("form_error");
			return false;
		}
		else{
			mess.removeClass("form_error");
		}

		if ($('.overlay-forms').is(':visible')) {		
			/*$('.form-order').hide();*/
			phone.val("");
			name.val("");
			mess.val("");
			/*$('.form-thanks').show();*/
		}
		else{
			/*$('.overlay-forms').show();*/
			phone.val("");
			name.val("");
			mess.val("");
		/*	$('.form-thanks').show();*/
		}

	});


	$(".phone_mask").mask("(999) 999-99-99");

	$('a[href^="#"]').click(function(){
		var el = $(this).attr('href');
		$('body').animate({
		scrollTop: $(el).offset().top}, 2000);
		return false;	
	});	

	$('ul.tabs').on('click', 'li:not(.current)', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.boxs').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
	});

	if ($(".slider").length){

		$('.slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: false,
		  infinite: false,
		  cssEase: 'linear',
		  fade:true,
			asNavFor: '.slider-nav',
			prevArrow: $('.prev'),
			nextArrow: $('.next')			
		});

	}


	if ($(".slider").length){

		$('.slider-nav').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  asNavFor: '.slider',
		  vertical: true,
		  dots: false,
		  focusOnSelect: true,
		  loop:false,
		  arrows:false,
		  dots:false,
		 	infinite: false,
		});

	}

  $('.header-adress-show').on('click', function () {
    if ($('.header-adress').is(':visible')) {
      $('.header-adress').stop().fadeOut();
    } else {
      $('.header-work').stop().fadeOut();
      $('.header-phones').stop().fadeOut();
      $('.nav-main').stop().fadeOut();
      $('.menu-sec').stop().fadeOut();
      $('.header-adress').stop().fadeIn();
      $('.header-adress-show').addClass('active')
    }
  });

  $('.header-work-show').on('click', function () {
    if ($('.header-work').is(':visible')) {
      $('.header-work').stop().fadeOut();
    } else {
      $('.header-work').stop().fadeOut();
      $('.header-phones').stop().fadeOut();
      $('.nav-main').stop().fadeOut();
      $('.menu-sec').stop().fadeOut();
      $('.header-work').stop().fadeIn();
      $('.header-work-show').addClass('active')
    }
  });

  $('.header-phones-show').on('click', function () {
    if ($('.header-phones').is(':visible')) {
      $('.header-phones').stop().fadeOut();
    } else {
      $('.header-adress').stop().fadeOut();
      $('.header-work').stop().fadeOut();
      $('.nav-main').stop().fadeOut();
      $('.menu-sec').stop().fadeOut();
      $('.header-phones').stop().fadeIn();
      $('.header-phones-show').addClass('active')
    }
  });  

  $('.header-menu-show').on('click', function () {
    if ($('.nav-main').is(':visible')) {
      $('.nav-main').stop().fadeOut();
    } else {
      $('.header-adress').stop().fadeOut();
      $('.header-work').stop().fadeOut();
      $('.header-phones').stop().fadeOut();
      $('.nav-main').stop().fadeIn();
      $('.menu-sec').stop().fadeIn();
      $('.header-menu-show').addClass('active')
    }
  });   

  $('.menu-close').on('click', function () {
    $('.nav-main').stop().fadeOut();
    $('.menu-sec').stop().fadeOut();
  });   
});	
	