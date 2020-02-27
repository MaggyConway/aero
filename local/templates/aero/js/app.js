jQuery(document).ready(function($) {
	management_tab();

	//СТРАНИЦА ФОТО И ВИДЕО
	$(function(){
		const photo = $('#photo');
		const video = $('#video');
		// console.log();

		$(photo).click(function() {
			$(this).addClass('active');
			$(video).removeClass('active');

			$('.photo_items').addClass('show');
			$('.video_items').removeClass('show');
		});
		$(video).click(function() {
			$(this).addClass('active');
			$(photo).removeClass('active');

			$('.video_items').addClass('show');
			$('.photo_items').removeClass('show');
		});
	});
	
 


	// МАСКА ДЛЯ ИНПУТА ТЕЛЕФОНА
	$(function(){
		$(".number_phone").mask("+7(999) 999-9999");
	});



	//ellipsis

	$('.news .news__item .name').ellipsis({
	  lines: 2,
	  ellipClass: 'ellip',
	  responsive: true
	});

	$('.breadcrumbs li:last-of-type').ellipsis({
	  lines: 1,
	  ellipClass: 'ellip',
	  responsive: true
	});

	$('.slider_name').ellipsis({
	  lines: 3,
	  ellipClass: 'ellip',
	  responsive: true
	});


	if ($(window).width() >= 480) {
		$('.sectorHeader h1').ellipsis({
		  lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
		  ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
		  responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
		});
		//console.log(1);
	} else {
		//console.log(2);
	}


	// submit forms
	$('.course__form').submit(function (e) {
		var $form = $(this);
		$.ajax({
			type: 'post',
			url: '/include/send.php',
			data: $form.serialize()
		}).done(function (event) {
			if (event == 1) {
				//Модалка успеха
				$('#modal-success-container').addClass('animate_modal');
				$('body').addClass('modal-success-active');
				$('.course__form')[0].reset();
			}
		}).fail(function () {
			alert('fail submit course form');
	});
		e.preventDefault();
	});

	$('.request__form').submit(function (e) {
		var $form = $(this);
		$.ajax({
			type: 'post',
			url: '/include/send.php',
			data: $form.serialize()
		}).done(function (event) {
			if (event == 1) {
				//Модалка успеха
				$('#modal-success-container').addClass('animate_modal');
				$('body').addClass('modal-success-active');
				$('.request__form')[0].reset();
			}
		}).fail(function () {
			alert('fail submit request form');
	});
		e.preventDefault();
	});

	$('.modal__form').submit(function (e) {
		var $form = $(this);
		$.ajax({
			type: 'post',
			url: '/include/send.php',
			data: $form.serialize()
		}).done(function (event) {
			if (event == 1) {
				$('#modal-another-date-container').removeClass('animate_modal');
				$('#modal-another-price-container').removeClass('animate_modal');
				//Модалка успеха
				$('#modal-success-container').addClass('animate_modal');
				$('body').addClass('modal-success-active');
				$('.modal__form')[0].reset();
				$('.modal__form')[1].reset();
			}
		}).fail(function () {
			alert('fail submit modal form');
	});
		e.preventDefault();
	});





	$('#home_slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
	// responsive: [{
	// 	breakpoint: 900,
	// 	settings: {
	// 		slidesToShow: 1,
	// 		slidesToScroll: 1,
	// 		swipe: true,
	// 	}
	// }],
	});

	$('.avia_aero_slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 2000,
	//initialSlide: 1,
	touchMove: true,
	centerMode: true,
	centerPadding: 0,
	swipe: true,
	responsive: [
	{
		breakpoint: 901,
		settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		},
	},
	{
		breakpoint: 601,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		},
	},
	],
	});


	$('#footer_another_news--slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		speed: 800,
		autoplay: true,
		autoplaySpeed: 3000,
		touchMove: true,
		centerMode: true,
		centerPadding: 0,
		swipe: true,
		responsive: [
		{
			breakpoint: 951,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			},
		},
		{
			breakpoint: 751,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			},
		},
		],
	});


	$('#gallery_slider_for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		fade: true,
		asNavFor: '#gallery_slider_nav'
	});
	$('#gallery_slider_nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '#gallery_slider_for',
		dots: false,
		arrows: true,
		//centerMode: true,
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 701,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			},
		},
		],
	});





	//линии с самолетиками на главной
	//console.log(window.location.pathname);

	if (window.location.pathname == '/') { // если это главная

		var sectionW = $('.avia_programs')[0].offsetWidth; //ширина секции
		var titleAviaW = $('.avia_programs .title h2')[0].offsetWidth; // ширина h2 1й секции
		var titleAeroW = $('.aero_programs .title h2')[0].offsetWidth;
		var titleAbout = $('.about_us .title h2')[0].offsetWidth;
		var titleNews = $('.news .title h2')[0].offsetWidth;

		var AviaPlaneW = sectionW - titleAviaW; // получаем динамичную ширину блока с чертой и самолетиком
		var AeroPlaneW = sectionW - titleAeroW;
		var AboutPlaneW = sectionW - titleAbout;
		var NewsPlaneW = sectionW - titleNews;
		// console.log('AviePlaneW -', AviaPlaneW);
		// console.log('AeroPlaneW -', AeroPlaneW);
		//console.log('AboutPlaneW -', AboutPlaneW);

		var aviaPlane = $('.avia_programs .title .plane');
		var aeroPlane = $('.aero_programs .title .plane');
		var aboutPlane = $('.about_us .title .plane');
		var newsPlane = $('.news .title .plane');

		aviaPlane.css('width', AviaPlaneW);
		aeroPlane.css('width', AeroPlaneW);
		aboutPlane.css('width', AboutPlaneW);
		newsPlane.css('width', NewsPlaneW);

		// console.log(aviaPlane[0]);
		// console.log(aeroPlane[0]);
		// console.log(aboutPlane[0]);
	}





	//mini скриптик для точек главного слайдера, так было проще
	var ww = 1300;
	var allWidth = $(window).width();
	var padding_for_dots = (allWidth - ww) / 2;
	var dots = $('#home_slider .slick-dots');

	if ($(window).width() >= 1600) {
		$(dots).css('padding-left', padding_for_dots + 'px');
	}





	$('.mobile-menu .checkbox-toggle').click(function() {

		if ($(this).hasClass('opened')) {

	//console.log($(window).width());
	if ($(window).width() >380)  {

		if ($(window).width() <=700) {
			$('.mobile-icon').css({
				right: '30px',
				top: '30px'
			});
			$(this).css ({
				right: '30px',
				top: '30px'
			});
	//console.log('allwidth >380 = ', $(window).width() >380);


	} else if ($(window).width() > 700) {
		$('.mobile-icon').css({
			right: '50px',
			top: '30px'
		});
		$(this).css ({
			right: '50px',
			top: '30px'
		});
	//console.log('allwidth big');
	}


	} else if ($(window).width() <= 380) {
		$('.mobile-icon').css({
			right: '20px',
			top: '30px'
		});
		$(this).css ({
			right: '20px',
			top: '30px'
		});
	//console.log('allwidth <= 380 = ', $(window).width() <= 380);
	}

	$('.mobile-menu .checkbox-toggle').css({
		position: 'relative',
		right: '0',
		top: '2px'
	});

	setTimeout(function() {
		$('.mobile-icon').css({
			position: 'relative',
			right: '0',
			top: '0'
		});
		$('.mobile-menu .checkbox-toggle').css({
			position: 'absolute',
			right: '0',
			top: '0'
		});

	}, 1000);



	$('html, body').animate({scrollTop: 0},1000);
	$(this).removeClass('opened');



	} else if (!($(this).hasClass('opened'))) {

		$('.mobile-icon').css({
			position: 'fixed',
		});
		$('.mobile-menu .checkbox-toggle').css({
			position: 'fixed',
		});

		if ($(window).width() >380)  {

			if ($(window).width() <=700) {
				$('.mobile-icon').css({
					right: '30px',
					top: '30px'
				});
				$('.mobile-menu .checkbox-toggle').css({
					right: '30px',
					top: '30px'
				});
	//console.log('allwidth >380 = ', $(window).width() >380);

	} else if ($(window).width() > 700) {
		$('.mobile-icon').css({
			right: '50px',
			top: '30px'
		});
		$('.mobile-menu .checkbox-toggle').css({
			right: '50px',
			top: '30px'
		});
	//console.log('allwidth big');
	}


	} else if ($(window).width() <= 380) {
		$('.mobile-icon').css({
			right: '20px',
			top: '30px'
		});
		$('.mobile-menu .checkbox-toggle').css({
			right: '20px',
			top: '30px'
		});
	//console.log('allwidth <= 380 = ', $(window).width() <= 380);
	}

	$(this).addClass('opened');
	}
});







	let top_panel = $('.about_card--top');
	let mob_tab_list = $(top_panel).find('.tabs-list');
	let mob_tab_item = $(mob_tab_list).find('.tabs-item');

	$(top_panel).click(function() {
		//mob_tab_item.css('display', 'block');

		$(this).toggleClass('opened');
		//console.log(mob_tab_item);
	});

});

//РУКОВОДСТВО (АККОРДЕОН)
window.management_tab = function() {
	//let items = $('.management__item');
	var management_title = $('.management__item .name');
	//console.log(management_title);

	// for (let i = 0; i < items.length; i++) {
	// 	let name = $(items[i]).find('.name');

		$(management_title).click(function() {
			$(this).toggleClass('open'); //работает

			var parent_item = $(this).parent('.management__item');
			$(parent_item).toggleClass('active'); //работает

			var management__itm = $(parent_item).find('.content_item');
			//console.log(management__itm[0]);
			if ($(management__itm).height() > 212) {
				setTimeout(function () { // работает
					$(management__itm).toggleClass('overflow'); // не работает!
				}, 600);
			}
			//$(management__itm).css('max-height', '212px'); // работает
		});
	//}

}