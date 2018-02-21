/***********************
 отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					var response = JSON.parse(result);
					console.log(response);
					$.fancybox.close();
					if (response["MAILER_ERROR"] !== undefined) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						$.fancybox.open({src: '#modal-thanks'});
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});

/***********************
 Input mask END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$('.fancy').fancybox({
		buttons: ['close'],
		backFocus: false,
		animationEffect: "zoom-in-out",
		animationDuration: 300,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
		transitionEffect: "slide"
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
		animationEffect: "zoom-in-out",
		animationDuration: 300,
		transitionEffect: "slide"
	});
}

function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		animationEffect: "zoom-in-out",
		animationDuration: 300,
		transitionEffect: "slide",
		lang : 'ru',
		i18n : {
			'ru' : {
				CLOSE       : 'Закрыть',
				NEXT        : 'Дальше',
				PREV        : 'Назад',
				ERROR       : 'Не удается загрузить. <br/> Попробуйте позднее.',
				PLAY_START  : 'Начать слайдшоу',
				PLAY_STOP   : 'Остановить слайдшоу',
				FULL_SCREEN : 'На весь экран',
				THUMBS      : 'Превью'
			}
		},
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		},
		onUpdate: function (instance, current) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if (video) {
				video.hide();
				width = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if (height * ratio > width) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width: width,
					height: height
				}).show();
			}
		}
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Custom Scroll BEGIN
 ***********************/
$(document).ready(function() {

});
/***********************
 Custom Scroll END
 ***********************/


/***********************
Aside Menu BEGIN
***********************/
$(document).ready(function() {
	// For IE10
	var ua = window.navigator.userAgent.toLowerCase(),
		is_ie = (/trident/gi).test(ua) || (/msie/gi).test(ua);
	if(is_ie) {
		$('.a-menu__child').addClass('ie');
	} else {
		$('.a-menu__child').each(function () {
			new SimpleBar(this,{
				autoHide: false
			});
		});
	}


	function openChildLink($asideLi) {
		$asideLi.addClass('opened');
		$('.a-menu__parent>li').not($asideLi).slideUp(0).addClass('hide');
		$asideLi.find('.a-menu__child').slideDown(0).removeClass('hide');
		$('.a-menu__back').slideDown(0).removeClass('hide').addClass('opened');
	}

	function backAsideMenu($backLink) {
		$('.a-menu__child').slideUp(0).addClass('hide');
		$('.a-menu__parent>li').slideDown(0).removeClass('hide opened');
		$backLink.slideUp(0).removeClass('opened').addClass('hide');
	}

	$('.a-menu__child-link').on('click',function(e){
		e.preventDefault();
		$asideLi = $(this).closest('li');
		openChildLink($asideLi);
	});

	$('.a-menu__back').on('click',function(){
		backAsideMenu($(this));
	});
});
/***********************
Aside Menu END
***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function(){
	$('.burger').on('click',function () {
		$(this).toggleClass('active');
		$('.aside-panel').toggleClass('opened');
	});

	$(document).on('click touchstart',function (e){
		var div = $(".burger,.aside-panel");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.burger').removeClass('active');
			$('.aside-panel').removeClass('opened');
		}
	});
});
/***********************
 Mob menu END
 ***********************/


/***********************
Slick BEGIN
***********************/
$('#big-slider').slick({
	adaptiveHeight: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	//autoplay: true,
	infinite: false,
	arrows: true,
	nextArrow: '<button type="button" class="slider-next"><i class="i-right"></i></button>',
	prevArrow: '<button type="button" class="slider-prev"><i class="i-left"></i></button>',
	dots: true,
	dotsClass: 'slider-dots'
});

$('#animators-slider').slick({
	adaptiveHeight: true,
	slidesToShow: 4,
	slidesToScroll: 4,
	//autoplay: true,
	infinite: false,
	arrows: true,
	nextArrow: '<button type="button" class="slider-next"><i class="i-right"></i></button>',
	prevArrow: '<button type="button" class="slider-prev"><i class="i-left"></i></button>',
	responsive: [
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
	}]
});

$('#video-slider').slick({
	adaptiveHeight: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	centerMode: true,
	centerPadding: '0',
	//autoplay: true,
	infinite: false,
	arrows: true,
	nextArrow: '<button type="button" class="slider-next"><i class="i-right"></i></button>',
	prevArrow: '<button type="button" class="slider-prev"><i class="i-left"></i></button>'
});

$('#our-clients-slider').slick({
	adaptiveHeight: true,
	slidesToShow: 5,
	slidesToScroll: 5,
	//autoplay: true,
	infinite: false,
	arrows: true,
	nextArrow: '<button type="button" class="slider-next"><i class="i-right"></i></button>',
	prevArrow: '<button type="button" class="slider-prev"><i class="i-left"></i></button>',
	responsive: [
		{
			breakpoint: 680,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}
	]
});

$('.rooms-slider__list').each(function () {
	$(this).slick({
		adaptiveHeight: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: '0',
		//autoplay: true,
		infinite: false,
		arrows: true,
		dots: true,
		dotsClass: 'slider-dots',
		nextArrow: '<button type="button" class="slider-next"><i class="i-right"></i></button>',
		prevArrow: '<button type="button" class="slider-prev"><i class="i-left"></i></button>'
	});
});
/***********************
Slick END
***********************/


/***********************
Our Offers Tabs BEGIN
***********************/
$(document).ready(function() {
	if($('.our-offers__nav').length) {
		$('.our-offers__nav a').on('click', function(e){
			e.preventDefault();
			var thisLink = $(this).data('link');

			$('.our-offers__nav a').not($(this)).removeClass('active');
			$(this).addClass('active');

			$('.our-offers__list .our-offers__item').removeClass('active');
			$('.our-offers__list').find('#'+thisLink).addClass('active');
		})
	}
});
/***********************
Our Offers Tabs END
***********************/


/***********************
 Rooms Slider Tabs BEGIN
***********************/
$(document).ready(function() {
	if($('.rooms-slider__nav').length) {
		$('.rooms-slider__nav a').on('click', function(e){
			e.preventDefault();
			var thisLink = $(this).data('room');

			$('.rooms-slider__nav a').not($(this)).removeClass('active');
			$(this).addClass('active');

			$('.rooms-slider__list-wrap .rooms-slider__list').removeClass('active');
			$('.rooms-slider__list-wrap').find('#'+thisLink).addClass('active');
		})
	}
});
/***********************
 Rooms Slider Tabs END
***********************/



/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});
});
/***********************
 Waypoints END
 ***********************/