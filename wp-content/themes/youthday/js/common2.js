// var img_dir = "http://" + window.location.hostname + "/img/";
$(document).ready(function () {
 $(function(){
	var $sideBotton = $('.nav-side-toggle');
	var $sideNav = $('.side-nav');
	$('#js-nav-side-toggle').click(function () {
		$sideBotton.toggleClass('open');
		$sideNav.toggleClass('open');
	});
	 });
	
	$(function () {
function scrollMenuDef() {
		$( ".ly-report .nav-menu-scroll" ).scrollLeft( 150 );
	}
		$(window).on('load resize', function() {scrollMenuDef();});
function scrollMenuSub() {
			$( ".repArea .nav-menu-scroll" ).scrollLeft( 150 );
}
		$(window).on('load resize', function() {scrollMenuSub();});
		$('img').attr('onmousedown', 'return false');
	$('img').attr('onselectstart', 'return false');
	$('img').attr('oncontextmenu', 'return false');
});
$(function () {
	var ua = navigator.userAgent;
if(/iPhone|iPad|iPod/.test(ua)) {
  $("body").addClass("ios");
}
	});
	/*sns button*/
// カレントで判断しBodyにclass付与[Judge by menu and assign class to element]
	$(function () {
		var $menu1 = $('.nav-menu ul li:nth-child(1)').hasClass('current_page_item');
		var $menu2 = $('.nav-menu ul li:nth-child(2)').hasClass('current_page_item');
		var $menu3 = $('.nav-menu ul li:nth-child(3)').hasClass('current_page_item');
		var $menu4 = $('.nav-menu ul li:nth-child(4)').hasClass('current_page_item');
		var $menu5 = $('.nav-menu ul li:nth-child(5)').hasClass('current_page_item');
		var $menuSide1 = $('.side-nav-area ul li:nth-child(1)').hasClass('current_page_item');
		var $menuSide2 = $('.side-nav-area ul li:nth-child(2)').hasClass('current_page_item');
		var $menuSide3 = $('.side-nav-area ul li:nth-child(3)').hasClass('current_page_item');
		var $menuSide4 = $('.side-nav-area ul li:nth-child(4)').hasClass('current_page_item');
		var $menuSide5 = $('.side-nav-area ul li:nth-child(5)').hasClass('current_page_item');
		if ($menu1) {
			$('body').addClass('ly-top');
		} else if ($menu2) {
			$('body').addClass('ly-timeline');
		} else if ($menu3) {
			$('body').addClass('ly-gallery');
		} else if ($menu4) {
			$('body').addClass('ly-history');
		} else if ($menu5) {
			$('body').addClass('ly-report');		
		} else if ($menuSide1) {
			$('body').addClass('ly-seinen');
		} else if ($menuSide2) {
			$('body').addClass('ly-howto');
		} else if ($menuSide3) {
			$('body').addClass('ly-kotoba');
		} else if ($menuSide4) {
			$('body').addClass('ly-contract');
		} else if ($menuSide5) {
			$('body').addClass('ly-personal');
		} else {
			$('body').addClass('ly-etc');
		}
	});
/*
	$(function() {
  var $win = $(window),
	  $head = $('header'),
      $nav = $('.js-nav-menu'),
      navPos = $nav.offset().top,
      fixedClass = 'isFix';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > navPos ) {
      $head.addClass(fixedClass);
    } else {
      $head.removeClass(fixedClass);
    }
  });
});

$(function() {
	var topBtn = $('.js-btn-form-box');
	var headFix = $('header').scrollTop();
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			topBtn.fadeIn();
			topBtn.addClass("ani");
		} else {
			topBtn.fadeOut();
			topBtn.removeClass("ani");
		}
		if ($(this).headFix) {
			headFix.addClass("isFix");
		} else {
			headFix.removeClass("isFix");
		}
	});
});
*/
});
