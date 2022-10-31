$(document).ready(function () {
	$('.slideshow').slidesjs({
		width: 1200,
		height: 400,
		navigation: false,
		pagination: false,
		play: {
			active: false,
			effect: "slide",
			interval: 5000,
			auto: true,
			swap: true,
			pauseOnHover: true,
			restartDelay: 2500
		},
		effect: {
			slide: {
				speed: 500,
			}
		}
	});

	$logoClone = $('.logo').clone();
	$sidebarClone = $('.left-sidebar').clone();
	$limit = $('.left-sidebar').position().top + $('.left-sidebar').height() - 2 * $('.top-nav').innerHeight();

	$(window).scroll(function(){
		$pos = $(window).scrollTop();
		if($pos > 100) {
			$('.top-nav').addClass('fixed-nav');
		} else {
			$('.top-nav').removeClass('fixed-nav');
		}

		if($('.top-nav .logo').length && $pos > $limit) {
			$('.top-nav .logo').replaceWith($sidebarClone);
			$('.page-content .left-sidebar').replaceWith($logoClone);
			$logoClone = $('.logo:first').clone();
			$sidebarClone = $('.left-sidebar:first').clone();
			sidebarOnTop();
		}

		if(!$('.top-nav .logo').length && $pos < $limit) {
			$('.top-nav .left-sidebar').replaceWith($logoClone);
			$('.page-content .logo').replaceWith($sidebarClone);
			$logoClone = $('.logo:first').clone();
			$sidebarClone = $('.left-sidebar:first').clone();
		}
	});

	$(window).on('load',function() {
		$pos = $(window).scrollTop();
		if($pos > 100) {
			$('.top-nav').addClass('fixed-nav');
		} else {
			$('.top-nav').removeClass('fixed-nav');
		}

		if($('.top-nav .logo').length && $pos > $limit) {
			$('.top-nav .logo').replaceWith($sidebarClone);
			$('.page-content .left-sidebar').replaceWith($logoClone);
			$logoClone = $('.logo:first').clone();
			$sidebarClone = $('.left-sidebar:first').clone();
			sidebarOnTop();
		}
	});

	function sidebarOnTop() {
		$('.left-sidebar').css({"border" : "0","box-shadow" : "none", "width" : "250px"});
		$('.left-sidebar>.heading').css("border-bottom","0");
		$('.left-sidebar').addClass('dropdown-container');
		$('.category-container').addClass('dropdown-content');
		$('.logo').css("visibility", "hidden");
	}
});
