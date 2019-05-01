// @codekit-append "vendor/slick.js";
// @codekit-append "vendor/masonry.js";
// @codekit-append "vendor/scrollreveal.js";
// @codekit-append "vendor/imagesloaded.js";
// @codekit-append "vendor/easydropdown.js";

function init(){
  $("body").addClass('loaded'); // fade in after init
}

$(document).ready(function () {
	$( ".scrollLink" ).click(function( event ) {
		event.preventDefault();
		$("html, body").an
		imate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
	});

	var $grid = $('.grid').imagesLoaded( function() {
		$grid.masonry({
			itemSelector: '.grid-item',
		});
	});
	
	$('.burger-container').click(function () {
		$(this).toggleClass('active');
		$('.mobile-menu').toggleClass('open');
	});

	$("a[href='#top']").click(function () {

		$("html, body").animate({
		scrollTop: 0
		}, "slow");
		return false;

	});

	$(function () {
		$('a[href*=#]').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
		});
	});
	
	$(window).resize();
});

$(window).bind('load', function () {

	var modal = $('.team-member-container');

	modal
	.on('init', function () {
		var $this = $(this);
		$this.addClass('loaded'); // fade in after init
	}).slick({
		slide: '.slide-container',
		draggable: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		draggable: true,
		arrows: true,
		infinite: true,
        prevArrow: '<span class="slick-arrow slick-prev hero-banner__arrow hero-banner__arrow--prev"> &#8249; </span>',
        nextArrow: '<span class="slick-arrow slick-next hero-banner__arrow hero-banner__arrow--next"> &#8250; </span>',
		mobileFirst: true,
		responsive: [
		{
			breakpoint: 600,
				settings: "unslick"
		}]
	})
});

init();