/* Author:

*/

$(function() {
	$(window).on('load', function() {
		//slider
		$('.slider').caroufredsel({
			auto: false,
			width: '100%',
			prev: {
				button: '.slider-arr.prev'
			},
			next: {
				button: '.slider-arr.next'
			},
			items: {
				visible: {
					min: 1,
					max: 4
				}
			},
			scroll: {
				items: 1
			},
			responsive: true,
			onCreate: function() {
				slide_arrows_center();
			}
		});
	});

	$(window).on('resize', function() {
		slide_arrows_center();
	});

	//navigation dropdown for mobile devices
	$('#navigation a.menu-btn').on('click', function() {
		$(this).next('ul').stop(true).slideToggle();
		$('#navigation').toggleClass('expanded');

		return false;
	});
});

function slide_arrows_center() {
	var slideH = $('.slide').height();
	var slideImgH = $('.slide a img').height();

	$('.slider, .slider-holder').css('height', slideH);
	$('a.slider-arr').css({'bottom': (slideImgH/2)});
}