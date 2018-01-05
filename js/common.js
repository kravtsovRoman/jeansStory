
//Burger menu в моб. версии
$(document).ready(function(){
	$('.fa-bars').on('click', function(event){
			$('.menu-left-mobile').slideToggle();
			event.stopPropagation();
		});
});

//Header slide
$(window).scroll(function(){
    if ($(window).scrollTop() > 30) {
        $('.menu-left a').addClass('menu-scrol');
        $('.phone').addClass('menu-scrol');
        $('.search').addClass('scrol');
        $('.cart').addClass('menu-scrol');
        $('.logo img').addClass('menu-scrol');
    }
    else {
        $('.menu-left a').removeClass('menu-scrol');
        $('.phone').removeClass('menu-scrol');
        $('.search').removeClass('scrol');
        $('.cart').removeClass('menu-scrol');
        $('.logo img').removeClass('menu-scrol');
    }
});

//Прокрутка вверх scrollTop
(function($) {
	$(function() {
	  $('#up').click(function() {
	    $('html, body').animate({scrollTop: 0},800);
	    return false;
	  })
	})
})(jQuery);

//Аккордеон - Фильтры товаров
$(document).ready(function(){
	$('.filter-header').on('click', function(){
		$(this).next().slideToggle();

		if($(this).children().hasClass('fa-minus')){
			$(this).children().removeClass('fa-minus');
			$(this).children().addClass('fa-plus');
		}else{
			$(this).children().removeClass('fa-plus');
			$(this).children().addClass('fa-minus');
		}
	})
});

//Фильтры товаров в моб. версии
$(document).ready(function(){
	$('.filter-button').on('click', function(event){
			$('.filter-header').next().slideToggle();
			$('aside').slideToggle();
			event.stopPropagation();
			$('.filter-header').children().removeClass('fa-minus');
			$('.filter-header').children().addClass('fa-plus');
		});
});

// OwlCarousel - Слайдер товаров
$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    autoplay: true,
	autoplayTimeout: 7000,
    responsive:{
    	200:{
            items:1,
            nav:true
        },
        576:{
            items:2,
            nav:true
        },
        768:{
            items:3,
            nav:false
        },
        992:{
            items:4,
            nav:false
        },
        1200:{
            items:5,
            nav:true,
            loop:false
        }
    }
});
