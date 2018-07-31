
function getURLParameter(name) {return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;} 
function run_geo(geo_url){
	$.ajax({type: 'GET',url: geo_url,dataType: 'xml',
		success: function(xml) {$(xml).find('ip').each(function(){
			var city = $(this).find('city').text();
			var region = $(this).find('region').text();
			if(city!=region){var ipg = city+', '+region;}else{var ipg = city;}
			$('<input type="hidden" />').attr({name: 'location', class: 'location', value:ipg}).appendTo("form");
		});}});
}

function submit_track_event(event){
    // if (yaCounter) {yaCounter.reachGoal(event);}
    // if (ga) {ga('send','event','submit',event);}
}

function validateEmail(email) {var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;return re.test(email);};

jQuery.fn.ForceNumericOnly =
    function() {
        return this.each(function() {
            $(this).keydown(function(e) {
                var key = e.charCode || e.keyCode || 0;
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };


// (function(d, s, id) {
// 	  var js, fjs = d.getElementsByTagName(s)[0];
// 	  if (d.getElementById(id)) return;
// 	  js = d.createElement(s); js.id = id;
// 	  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10&appId=134257727180060';
// 	  fjs.parentNode.insertBefore(js, fjs);
// 	}(document, 'script', 'facebook-jssdk'));


setTimeout(function() {
    document.getElementsByTagName('body')[0].className += ' pre-loaded';
}, 2500);





"use strict";

$(function(){

	$(document).ready(function() {

		$('#first-step input').change(function() {$('#first-step .big-btn').removeClass('not-active');});
		$('#second-step input').change(function() {$('#second-step .big-btn').removeClass('not-active');});
		$('#third-step input').change(function() {$('#third-step .big-btn').removeClass('not-active');});

		// VK.Widgets.Group("vk_groups", {mode: 4, width: "305", height: "480"}, 23213239);

		$('input[type="tel"]').ForceNumericOnly();

		$('input[type="email"]').blur(function() {
			if(!validateEmail($(this).val())) {
				$(this).addClass('error-input');
			}
		});
		$('input[type="email"]').focus(function() {
			$(this).removeClass('error-input');
		});

		$('.inner-slick-next').on('click', function() {
			alert(123);
			// $(this).addClass('active');
			// setTimeout(function() {
			// 	$(this).removeClass('active');
			// }, 1000);
		});

		// убираем плейсхолдер при фокусе
		$('input, textarea').focus(function(){
			// $(this).css({'box-shadow': 'none'});
			$(this).data('placeholder',$(this).attr('placeholder'));
			$(this).attr('placeholder','');
		});
		$('input, textarea').blur(function(){
			$(this).attr('placeholder',$(this).data('placeholder'));
		});

		// Вставка названия файла в форме (для input-file)
		$(".input-file-photo").change(function() {
			var $el = $(this), fileName, $block = $el.next('.add-photo');
			if ($el.val().lastIndexOf('\\')) {
				var i = $el.val().lastIndexOf('\\') + 1;
			} else {
				var i = $el.val().lastIndexOf('/') + 1;
			}
			fileName = $el.val().slice(i);
			$block.html(fileName);
		});


		//подгрузка объектов
		$('.s4 .play-video').click(function(){
			$('#s4video-modal').arcticmodal();
		});

		$('.open-map-btn').click(function(e) {
			e.preventDefault();
			$('#map-modal').arcticmodal();
		});


		//запуск видео по клику из списка
		$('#video-patient .video-block.alko').click(function(e){
			e.preventDefault();
			$(this).html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HtlUUKpobes?autoplay=1;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
		});




		//modal header
		$('.callback-btn, .big-btn, .back-btn').click(function() {$('#callback-modal').arcticmodal();});
		$('#consult-btn, .consult-fixed, .write-consult').click(function(e) {
			e.preventDefault();
			$('.menu').removeClass('down');
			$('#write-modal').arcticmodal();
		});
		$('.politics').click(function(e) {
			e.preventDefault();
			$('#pol-conf').arcticmodal();
		});

		//неправильный ввод полей
		// $('#fourth-step input[type="submit"]').click(function(event) {
		// 	var tel_input = $('#fourth-step .phone');
		// 	if(tel_input.val() == '') {
		// 		event.preventDefault();
		// 		$('#error-modal').arcticmodal();
		// 		if(tel_input.val() == '') {tel_input.addClass('error-input');}
		// 	}
		// });
		$('.wrap-modal input[type="submit"], #fourth-step input[type="submit"]').click(function(event) {
			var tel_input = $(this).parent().find('input[type=tel]');
			if(tel_input.val() == '') {
				event.preventDefault();
				$('#error-modal').arcticmodal();
				if(tel_input.val() == '') {tel_input.addClass('error-input');}
			}
		});
		$('form input').focus(function() {
			if($(this).hasClass('error-input')) {
				$(this).removeClass('error-input');
			}
		});

		//style select
		// $('.slct').click(function(){
		// 	var dropBlock = $(this).parent().find('.drop');
		// 	if( dropBlock.is(':hidden') ) {
		// 		dropBlock.slideDown('fast');
		// 		$(this).addClass('active');
		// 		$('.drop').find('li').click(function(){
		// 			var selectResult = $(this).html();
		// 			$(this).parent().parent().find('input').val(selectResult);
		// 			$(this).parent().parent().find('.slct').removeClass('active').html(selectResult);
		// 			dropBlock.slideUp('fast');
		// 		});
		// 	} else {
		// 		$(this).removeClass('active');
		// 		dropBlock.slideUp('fast');
		// 	}
		// 	return false;
		// });

		//masked phone
		$(".wrap-modal input[type='tel'], .form-wrap input[type='tel']").mask("+7 (999) 999-99-99");

		// удаление бордер боттом у предыдущего элемента
		$( "#ans-right li.active" ).prev().css( "border-bottom", "none" );

		$(window).stellar({hideDistantElements: false});

		$('.send-photo').click(function() {$('#sendphoto-modal').arcticmodal();});
		$('.zayavka-modal').click(function() {$('#zayavka-modal').arcticmodal();});
		$('.writeus-modal').click(function() {$('#writeus-modal').arcticmodal();});

		// $('.open-sldr-modal').click(function() {
		// 	$('#photo-sldr-modal').arcticmodal({
		// 		afterClose: function() {
		// 			// $('.tabs__caption li, .tabs .tabs__content').removeClass('active');
		// 		},
		// 		beforeOpen: function() {
		// 			// $('.big-slider1, .nav-slider1, .big-slider2, .nav-slider2, .big-slider3, .nav-slider3, .big-slider4, .nav-slider4, .big-slider5, .nav-slider5').slick('setPosition');
		// 		}
		// 	});
		// 	// $('.big-slider1, .nav-slider1, .big-slider2, .nav-slider2, .big-slider3, .nav-slider3, .big-slider4, .nav-slider4, .big-slider5, .nav-slider5').slick('setPosition');
		// });

		//слайдер
		// $('.big-slider1').slick({
		// 	slidesToShow: 1,
		// 	slidesToScroll: 1,
		// 	arrows: false,
		// 	asNavFor: '.nav-slider1',
		// 	fade: false
		// });
		// $('.nav-slider1').slick({
		// 	slidesToShow: 6,
		// 	slidesToScroll: 1,
		// 	asNavFor: '.big-slider1',
		// 	dots: false,
		// 	arrows: true,
		// 	centerMode: false,
		// 	focusOnSelect: true
		// });

		// $('.big-slider2').slick({
		// 	slidesToShow: 1,
		// 	slidesToScroll: 1,
		// 	arrows: false,
		// 	asNavFor: '.nav-slider2',
		// 	fade: false
		// });
		// $('.nav-slider2').slick({
		// 	slidesToShow: 6,
		// 	slidesToScroll: 1,
		// 	asNavFor: '.big-slider2',
		// 	dots: false,
		// 	arrows: true,
		// 	centerMode: false,
		// 	focusOnSelect: true
		// });

		// $('.big-slider3').slick({
		// 	slidesToShow: 1,
		// 	slidesToScroll: 1,
		// 	arrows: false,
		// 	asNavFor: '.nav-slider3',
		// 	fade: false
		// });
		// $('.nav-slider3').slick({
		// 	slidesToShow: 6,
		// 	slidesToScroll: 1,
		// 	asNavFor: '.big-slider3',
		// 	dots: false,
		// 	arrows: true,
		// 	centerMode: false,
		// 	focusOnSelect: true
		// });

		// $('.big-slider4').slick({
		// 	slidesToShow: 1,
		// 	slidesToScroll: 1,
		// 	arrows: false,
		// 	asNavFor: '.nav-slider4',
		// 	fade: false
		// });
		// $('.nav-slider4').slick({
		// 	slidesToShow: 6,
		// 	slidesToScroll: 1,
		// 	asNavFor: '.big-slider4',
		// 	dots: false,
		// 	arrows: true,
		// 	centerMode: false,
		// 	focusOnSelect: true
		// });

		// $('.big-slider5').slick({
		// 	slidesToShow: 1,
		// 	slidesToScroll: 1,
		// 	arrows: false,
		// 	asNavFor: '.nav-slider5',
		// 	fade: false
		// });
		// $('.nav-slider5').slick({
		// 	slidesToShow: 6,
		// 	slidesToScroll: 1,
		// 	asNavFor: '.big-slider5',
		// 	dots: false,
		// 	arrows: true,
		// 	centerMode: false,
		// 	focusOnSelect: true
		// });

		// $('.tabs__caption').click(function() {
		// 	$('.big-slider1, .nav-slider1, .big-slider2, .nav-slider2, .big-slider3, .nav-slider3, .big-slider4, .nav-slider4, .big-slider5, .nav-slider5').slick('setPosition');
		// });

		$('.brand-slider').slick({
			slidesToShow: 2,
			slidesToScroll: 2,
			dots: false,
			arrows: true,
			centerMode: false
		});

		$('.for-sect2-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			// arrows: false,
			fade: false
		});

		// $('.it .garderob').click(function() {$('.tab1').trigger('click');});
		// $('.it .automob').click(function() {$('.tab5').trigger('click');});
		// $('.it .sumki').click(function() {$('.tab3').trigger('click');});
		// $('.it .mebel').click(function() {$('.tab2').trigger('click');});
		// $('.it .obuv').click(function() {$('.tab4').trigger('click');});


		$('.it.garderob, .garderob').click(function() {
			$('#photo-sldr-modal-garderob').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});
		$('.it.automob, .automob').click(function() {
			$('#photo-sldr-modal-automob').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});
		$('.it.sumki, .sumki').click(function() {
			$('#photo-sldr-modal-sumki').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});
		$('.it.mebel, .mebel').click(function() {
			$('#photo-sldr-modal-mebel').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});
		$('.it.obuv, .obuv').click(function() {
			$('#photo-sldr-modal-obuv').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});
		$('.it.raznoe, .raznoe').click(function() {
			$('#photo-sldr-modal-raznoe').arcticmodal({
				beforeOpen: function() {
					$('.for-sect2-slider').slick('slickNext').slick('slickPrev');
				}
			});
		});


		$('.inst-slider').slick({
			dots: false,
			infinite: true,
			speed: 400,
			slidesToShow: 1
		});
		$('.s2-slider').slick({
			dots: false,
			infinite: true,
			speed: 400,
			slidesToShow: 1
		});
		$('.s4-slider').slick({
			dots: false,
			infinite: true,
			speed: 400,
			slidesToShow: 1
		});


		//плавный переход меню
		$('.mob-menu a').click(function(e){
			e.preventDefault();
			$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top}, 1000);
			$('body').css({
				'overflow-y': 'scroll',
				'padding-right': 0
			});
			$('.mob-menu').removeClass('active');
				// $('.menu-btn').removeClass('as-close');
				// $('.close-menu').fadeOut('100');
			});

		$('.hamb-menu').click(function() {
			if(!$('.mob-menu').hasClass('active')) {$('.mob-menu').addClass('active');}
		});
		$('.close-btn').click(function() {
			if($('.mob-menu').hasClass('active')) {$('.mob-menu').removeClass('active');}
		});

		// $('.scroll-icon').click(function(e) {
		// 	e.preventDefault();
		// 	$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top}, 1000);
		// });
		

		//исправление бага ArcticModal в Firefox
		$('.arcticmodal-close').click(function() {
			$('body').css({'overflow-y': 'scroll'});
		});
		$("body").click(function(){$(this).css('overflow-y','visible')});




// НАЧАЛО ====================================
// ФОРМА ИЗ НЕСКОЛЬКИХ ШАГОВ
		$('.first-step-next').click(function(e) {
			e.preventDefault();
			if($('input[name=step1]').is(':checked')) {
				$('#second-step').show();
				$('#first-step').hide();
				if($('input[name=step1]:checked').val() == 'Обувь') {
					$('.obuv-second').fadeIn();
				} else if($('input[name=step1]:checked').val() == 'Сумка') {
					$('.sumka-second').fadeIn();
				} else if($('input[name=step1]:checked').val() == 'Одежда') {
					$('.odejda-second').fadeIn();
				} else if($('input[name=step1]:checked').val() == 'Мебель') {
					$('.mebel-second').fadeIn();
				} else if($('input[name=step1]:checked').val() == 'Салон автомобиля') {
					$('.salon-second').fadeIn();
				} else if($('input[name=step1]:checked').val() == 'Другое') {
					$('.drugoe-second').fadeIn();
				}
			} else {
				$('#first-step .big-btn').addClass('err-btn');
			}
		});

		$('.second-back').click(function(e) {
			e.preventDefault();
			$('#first-step').fadeIn();
			$('#second-step, .obuv-second, .sumka-second, .odejda-second, .mebel-second, .salon-second, .drugoe-second').hide();
		});

		$('.third-back').click(function(e) {
			e.preventDefault();
			$('#second-step').fadeIn();
			$('#third-step, .obuv-third, .sumka-third, .odejda-third, .mebel-third, .salon-third, .drugoe-third').hide();
		});

		$('.second-step-next').click(function(e) {
			e.preventDefault();
			if($('input[name=step2]').is(':checked')) {
				$('#third-step').show();
				$('#second-step').hide();
				if($(this).hasClass('obuv-second-btn')) {$('.obuv-third').fadeIn();} 
				else if($(this).hasClass('sumka-second-btn')) {$('.sumka-third').fadeIn();}
				else if($(this).hasClass('odejda-second-btn')) {$('.odejda-third').fadeIn();}
				else if($(this).hasClass('mebel-second-btn')) {$('.mebel-third').fadeIn();}
				else if($(this).hasClass('salon-second-btn')) {$('.salon-third').fadeIn();}
				else if($(this).hasClass('drugoe-second-btn')) {$('.drugoe-third').fadeIn();}
			} else {
				$('#second-step .big-btn').addClass('err-btn');
			}
		});



		// функция для проверки параметров, выбранных на определённом шаге
		function checkSteps(name1, name2, name3) {
			var step1 = $('input[name=step1]:checked');
			var step2 = $('input[name=step2]:checked');
			var step3 = $('input[name=step3]:checked');
			if(step1.val() == name1 && step2.val() == name2 && step3.val() == name3) {
				return true;
			} else {return false;}
		}
		// функция для изменения данных на последнем шаге
		function finalData(price, srok, image) {
			$('#final-price').html(price);
			$('#final-srok').html(srok);
			$('#final-image').html(image);
		}

		$('.third-step-next').click(function(e) {
			e.preventDefault();
			if($('input[name=step3]').is(':checked')) {
				$('#fourth-step').show();
				$('#third-step').hide();
				
				//=================обувь
				if(checkSteps('Обувь','Туфли','Царапина, задир')) {finalData('от 1500 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Обувь','Туфли','Полное обновление цвета (потертости)')) {finalData('от 4000 до 10000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Туфли','Замена цвета')) {finalData('от 5000 до 12000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Туфли','Набойки') || checkSteps('Обувь','Ботинки','Набойки') || checkSteps('Обувь','Кроссовки','Набойки') || checkSteps('Обувь','Ботильоны','Набойки') || checkSteps('Обувь','Сапоги','Набойки') || checkSteps('Обувь','Летняя обувь','Набойки')) {finalData('от 500 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Обувь','Туфли','Химчистка') || checkSteps('Обувь','Летняя обувь','Химчистка') || checkSteps('Обувь','Ботинки','Химчистка') || checkSteps('Обувь','Кроссовки','Химчистка') || checkSteps('Обувь','Ботильоны','Химчистка')) {finalData('от 2000 до 3000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Обувь','Ботинки','Царапина, задир') || checkSteps('Обувь','Кроссовки','Царапина, задир') || checkSteps('Обувь','Ботильоны','Царапина, задир') || checkSteps('Обувь','Летняя обувь','Царапина, задир')) {finalData('от 1500 до 3000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Обувь','Ботинки','Полное обновление цвета (потертости)')) {finalData('от 3500 до 6000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Ботинки','Замена цвета') || checkSteps('Обувь','Ботильоны','Замена цвета')) {finalData('от 4500 до 7000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Обувь','Кроссовки','Полное обновление цвета (потертости)')) {finalData('от 3500 до 5000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Кроссовки','Замена цвета')) {finalData('от 4500 до 6000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Обувь','Ботильоны','Полное обновление цвета (потертости)')) {finalData('от 3500 до 6000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Обувь','Сапоги','Царапина, задир')) {finalData('от 2500 до 3500 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Обувь','Сапоги','Полное обновление цвета (потертости)')) {finalData('от 3500 до 7000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Сапоги','Замена цвета')) {finalData('от 5000 до 9000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Сапоги','Химчистка')) {finalData('от 2000 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Обувь','Летняя обувь','Полное обновление цвета (потертости)')) {finalData('от 3500 до 4500 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Обувь','Летняя обувь','Замена цвета')) {finalData('от 4500 до 5500 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				//=================обувь

				// ================сумка
				if(checkSteps('Сумка','Портфель','Царапина, задир') || checkSteps('Сумка','Рюкзак','Царапина, задир') || checkSteps('Сумка','Клатч','Царапина, задир') || checkSteps('Сумка','Сумка','Царапина, задир') || checkSteps('Сумка','Дипломат','Царапина, задир') || checkSteps('Сумка','Чемодан','Царапина, задир')) {finalData('от 2500 до 5000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Портфель','Полное обновление цвета (потертости)') || checkSteps('Сумка','Рюкзак','Полное обновление цвета (потертости)') || checkSteps('Сумка','Сумка','Полное обновление цвета (потертости)') || checkSteps('Сумка','Дипломат','Полное обновление цвета (потертости)')) {finalData('от 5000 до 8000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Портфель','Замена цвета')) {finalData('от 6000 до 12000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Портфель','Восстановить канты') || checkSteps('Сумка','Рюкзак','Восстановить канты') || checkSteps('Сумка','Клатч','Восстановить канты') || checkSteps('Сумка','Чемодан','Восстановить канты') || checkSteps('Сумка','Дипломат','Восстановить канты')) {finalData('от 2500 до 4000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Портфель','Замена ручек') || checkSteps('Сумка','Рюкзак','Замена ручек') || checkSteps('Сумка','Клатч','Замена ручек') || checkSteps('Сумка','Сумка','Замена ручек') || checkSteps('Сумка','Дипломат','Замена ручек') || checkSteps('Сумка','Чемодан','Замена ручек')) {finalData('от 3000 до 5000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Портфель','Химчистка') || checkSteps('Сумка','Рюкзак','Химчистка') || checkSteps('Сумка','Клатч','Химчистка') || checkSteps('Сумка','Дипломат','Химчистка') || checkSteps('Сумка','Чемодан','Химчистка')) {finalData('от 2000 до 4000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Сумка','Клатч','Полное обновление цвета (потертости)') || checkSteps('Сумка','Чемодан','Полное обновление цвета (потертости)')) {finalData('от 6000 до 12000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Сумка','Сумка','Восстановить канты')) {finalData('от 3500 до 4000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Сумка','Портфель','Замена цвета')) {finalData('от 6000 до 12000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Рюкзак','Замена цвета') || checkSteps('Сумка','Дипломат','Замена цвета')) {finalData('от 7000 до 10000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Клатч','Замена цвета') || checkSteps('Сумка','Чемодан','Замена цвета')) {finalData('от 8000 до 14000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Сумка','Сумка','Замена цвета')) {finalData('от 5000 до 9000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				// ================сумка

				//=================одежда
				if(checkSteps('Одежда','Куртка','Царапина, задир')) {finalData('от 2000 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Куртка','Полное обновление цвета (потертости)')) {finalData('от 5000 до 7000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Куртка','Замена цвета')) {finalData('от 7000 до 9000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Куртка','Химчистка')) {finalData('от 2000 до 3000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Куртка','Порыв перфорации') || checkSteps('Одежда','Плащ','Порыв перфорации') || checkSteps('Одежда','Пальто','Порыв перфорации') || checkSteps('Одежда','Пуховик','Порыв перфорации') || checkSteps('Одежда','Дубленка','Порыв перфорации') || checkSteps('Одежда','Штаны','Порыв перфорации')) {finalData('от 3000 до 6000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Одежда','Плащ','Царапина, задир') || checkSteps('Одежда','Пальто','Царапина, задир')) {finalData('от 2000 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Плащ','Полное обновление цвета (потертости)') || checkSteps('Одежда','Пальто','Полное обновление цвета (потертости)')) {finalData('от 8000 до 12000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Плащ','Замена цвета') || checkSteps('Одежда','Пальто','Замена цвета')) {finalData('от 10000 до 14000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Плащ','Химчистка') || checkSteps('Одежда','Пальто','Химчистка') || checkSteps('Одежда','Пуховик','Химчистка')) {finalData('от 4000 до 6000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Одежда','Пуховик','Царапина, задир')) {finalData('от 3000 до 6000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Пуховик','Полное обновление цвета (потертости)')) {finalData('от 6000 до 9000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Пуховик','Замена цвета')) {finalData('от 8000 до 11000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}

				if(checkSteps('Одежда','Дубленка','Царапина, задир')) {finalData('от 2000 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Дубленка','Полное обновление цвета (потертости)')) {finalData('от 6000 до 10000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Дубленка','Замена цвета')) {finalData('от 8000 до 12000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Дубленка','Химчистка')) {finalData('от 4000 до 8000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Одежда','Штаны','Царапина, задир')) {finalData('от 2500 до 5000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Одежда','Штаны','Полное обновление цвета (потертости)')) {finalData('от 6000 до 8000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Штаны','Замена цвета')) {finalData('от 6000 до 8000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Одежда','Штаны','Химчистка')) {finalData('от 2500.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				//=================одежда

				// ===============мебель
				if(checkSteps('Мебель','Диван','Царапина, задир') || checkSteps('Мебель','Кресло','Царапина, задир') || checkSteps('Мебель','Стул','Царапина, задир') || checkSteps('Мебель','Стол','Царапина, задир') || checkSteps('Мебель','Пуфы','Царапина, задир') || checkSteps('Мебель','Офисное кресло','Царапина, задир')) {finalData('от 5000 до 15000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Мебель','Диван','Полное обновление цвета (потертости)')) {finalData('от 15000 до 30000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Диван','Замена цвета')) {finalData('от 20000 до 35000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Диван','Прожог') || checkSteps('Мебель','Кресло','Прожог') || checkSteps('Мебель','Стул','Прожог') || checkSteps('Мебель','Стол','Прожог') || checkSteps('Мебель','Пуфы','Прожог') || checkSteps('Мебель','Офисное кресло','Прожог')) {finalData('от 5000 до 10000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Мебель','Диван','Химчистка')) {finalData('от 7000 до 10000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Мебель','Кресло','Полное обновление цвета (потертости)')) {finalData('от 10000 до 20000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Кресло','Замена цвета')) {finalData('от 15000 до 30000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Кресло','Химчистка')) {finalData('от 7000 до 10000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Мебель','Стул','Полное обновление цвета (потертости)') || checkSteps('Мебель','Стол','Полное обновление цвета (потертости)') || checkSteps('Мебель','Пуфы','Полное обновление цвета (потертости)') || checkSteps('Мебель','Офисное кресло','Полное обновление цвета (потертости)')) {finalData('от 5000 до 10000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Стул','Замена цвета') || checkSteps('Мебель','Стол','Замена цвета') || checkSteps('Мебель','Пуфы','Замена цвета') || checkSteps('Мебель','Офисное кресло','Замена цвета')) {finalData('от 5000 до 10000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Мебель','Стул','Химчистка') || checkSteps('Мебель','Стол','Химчистка') || checkSteps('Мебель','Пуфы','Химчистка') || checkSteps('Мебель','Офисное кресло','Химчистка')) {finalData('от 2500 до 5000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				// ===============мебель

				// =====================салон авто
				if(checkSteps('Салон автомобиля','Сиденье','Царапина, задир')) {finalData('от 4000 до 6000 руб.', '4 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Салон автомобиля','Сиденье','Полное обновление цвета (потертости)')) {finalData('от 5000 до 7000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Салон автомобиля','Сиденье','Прожог')) {finalData('от 1500 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Салон автомобиля','Рулевое колесо','Царапина, задир')) {finalData('от 2500 до 3500 руб.', '4 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Салон автомобиля','Рулевое колесо','Полное обновление цвета (потертости)')) {finalData('от 2500 до 4000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Салон автомобиля','Ручка КПП','Царапина, задир')) {finalData('от 2000 до 3000 руб.', '4 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Салон автомобиля','Ручка КПП','Полное обновление цвета (потертости)')) {finalData('от 1500 до 2500 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				// =====================салон авто

				// =================другое
				if(checkSteps('Другое','Перчатки','Царапина, задир')) {finalData('от 2500 до 5000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Другое','Перчатки','Полное обновление цвета (потертости)')) {finalData('от 6000 до 8000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Перчатки','Замена цвета')) {finalData('от 6000 до 8000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Перчатки','Восстановить канты')) {finalData('от 6000 до 8000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Перчатки','Химчистка')) {finalData('от 2500.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Другое','Портмоне','Царапина, задир')) {finalData('от 1500 до 2000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Другое','Портмоне','Полное обновление цвета (потертости)')) {finalData('от 3000 до 6000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Портмоне','Замена цвета')) {finalData('от 4000 до 7000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Портмоне','Восстановить канты')) {finalData('от 2500 до 3500 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Портмоне','Химчистка')) {finalData('от 2000 до 3000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}

				if(checkSteps('Другое','Ремень','Царапина, задир')) {finalData('от 1500 до 2000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				if(checkSteps('Другое','Ремень','Полное обновление цвета (потертости)')) {finalData('от 1500 до 3000 руб.', 'от 2 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Ремень','Замена цвета')) {finalData('от 2500 до 4000 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Ремень','Восстановить канты')) {finalData('от 2500 до 3500 руб.', '5 дней', '<img src="img/wallet.jpg" alt="slide1">');}
				if(checkSteps('Другое','Ремень','Химчистка')) {finalData('от 2000 до 3000 руб.', '2 дня', '<img src="img/wallet.jpg" alt="slide12">');}
				// =================другое
			} else {
				$('#third-step .big-btn').addClass('err-btn');
			}
		});

		$('#first-step input').on('change', function() {
			$('#first-step .big-btn').removeClass('err-btn');
			$('#second-step .big-btn').removeClass('err-btn');
		});
		$('#second-step input').on('change', function() {$('#second-step .big-btn').removeClass('err-btn');});
		$('#third-step input').on('change', function() {$('#third-step .big-btn').removeClass('err-btn');});
		
// ФОРМА ИЗ НЕСКОЛЬКИХ ШАГОВ
// КОНЕЦ ====================================


		$("form.wrap-stepform, .wrap-nodal form").submit(function(e) {
			e.preventDefault();

			// var phone_p1 = $(this).find('.inp-tel-1').val();
			// var phone_p2 = $(this).find('.inp-tel-2').val();
			// var phone_p3 = $(this).find('.inp-tel-3').val();
			// var area_mess = $(this).find('#area_mess').val();

			// if(phone_p1 == '') {$(this).find('.inp-tel-1').css({'box-shadow': '0 0 4px 1px #F02D0E'});}
			// if(phone_p2 == '') {$(this).find('.inp-tel-2').css({'box-shadow': '0 0 4px 1px #F02D0E'});}
			// if(phone_p3 == '') {$(this).find('.inp-tel-3').css({'box-shadow': '0 0 4px 1px #F02D0E'});}
			// if(phone_p1 == '' || phone_p2 == '' || phone_p3 == '' || phone_p2.length < 3 || area_mess == '') {
			// 	$('#error-modal').arcticmodal();
			// 	if(phone_p2.length < 3) {$(this).find('.inp-tel-2').css({'box-shadow': '0 0 4px 1px #F02D0E'});}
			// 	if(area_mess == '') {$(this).find('#area_mess').css({'box-shadow': '0 0 4px 1px #F02D0E'});}
			// 	return 0;
			// } else {
			// 	var full_phone = '+' + phone_p1 + ' (' + phone_p2 + ') ' + phone_p3;
			// 	$(this).find('.full_phone').val(full_phone);
			// }

			var form_data = $(this).serialize(); //собераем все данные из формы
			var type = $(this).attr('method');
			var track_event = $(this).find('input[name="event"]').val();

			var type_frm = $(this).find('input[name="typefrm"]').val();

			$.ajax({
				type: "POST",
				url: "./mail.php",
				data: form_data,
				success: function() {
					// $('.arcticmodal-close').trigger('click');
					$('.wrap-modal input[type=text], .wrap-modal input[type=tel], .wrap-modal input[type=email]').val('');
					$('#success-modal').arcticmodal();
					$('body').css({'overflow-y': 'scroll'});
					// submit_track_event(track_event);
					// yaCounter42910834.reachGoal(track_event);
					// ga('send','event','submit',track_event);
				},
				beforeSend: function(jqXHR, settings) {
					// var credentials = Comagic.getCredentials();
					// settings.data += '&' + $.param(credentials);
				}
			});

			// window.history.pushState(null, null, 'lid.php');
		});





		//UTM GEO
		$.get("http://ipinfo.io", function(response) {geo_url='http://ipgeobase.ru:7020/geo?ip='+response.ip; run_geo(geo_url);}, "jsonp");
		utm=[];$.each(["utm_source","utm_medium","utm_campaign","utm_term",'source_type','source','position_type','position','added','creative','matchtype'],function(i,v){$('<input type="hidden" />').attr({name: v, class: v, value: function(){if(getURLParameter(v) == undefined)return '-'; else return getURLParameter(v)}}).appendTo("form")});
		$('<input type="hidden" />').attr({name: 'url', value: document.location.href}).appendTo("form");
		$('<input type="hidden" />').attr({name: 'title', value: document.title}).appendTo("form");





//==========EoF==============
	}); //doc.ready


	// ТАБЫ
	$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
		$(this)
		.addClass('active').siblings().removeClass('active')
		.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active').find('.ans-video').trigger('click');
	});


});//function