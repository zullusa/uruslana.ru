jQuery(document).ready(function ($) {


	$(window).stellar();

	var links = $('.navigation').find('li');
	slide = $('.slide');
	button = $('.button');
	mywindow = $(window);
	htmlbody = $('html,body');


	slide.waypoint(function (event, direction) {

		dataslide = $(this).attr('data-slide');

		if (direction === 'down') {
			$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
		}
		else {
			$('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
		}

	});

	mywindow.scroll(function () {
		if (mywindow.scrollTop() == 0) {
			$('.navigation li[data-slide="1"]').addClass('active');
			$('.navigation li[data-slide="6"]').removeClass('active');
		}
	});

	function goToByScroll(dataslide) {
		htmlbody.animate({
			scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
		}, 2000, 'easeInOutQuint');
	}


	links.click(function (e) {
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		e.preventDefault();
	});

	button.click(function (e) {
		dataslide = $(this).attr('data-slide');
		goToByScroll(dataslide);
		e.preventDefault();
	});

	//prettyPhoto
	$("a[rel^='prettyPhoto']").prettyPhoto({
		theme: 'dark_square',
		social_tools:''
	});

	//Image hover
	$(".hover_img").live('mouseover', function () {
			var info = $(this).find("img");
			info.stop().animate({opacity: 0.43}, 500);
			$(".preloader").css({'background': 'none'});
		}
	);
	$(".hover_img").live('mouseout', function () {
			var info = $(this).find("img");
			info.stop().animate({opacity: 1}, 500);
			$(".preloader").css({'background': 'none'});
		}
	);


});







