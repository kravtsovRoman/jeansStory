
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

//Slider Product
$(document).ready(function(){
	$('.slider-product').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			asNavFor: '.slider-product-nav'
		});
		$('.slider-product-nav').slick({
			slidesToShow: 4,
			asNavFor: '.slider-product',
			focusOnSelect: true
		});
	$('.slider_item').zoom({
		on:'grab',
		magnify: '2'
	});
});

//Slider Catalog
$(document).ready(function(){
  $('.multiple-item').slick({
  	infinite: true,
  	autoplay: true,
  	autoplaySpeed: 2000,
  	slidesToShow: 5,
  	slidesToScroll: 1,
  	responsive: [
    {
      breakpoint: 1200,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    },
    {
     breakpoint: 768,
      settings: {
       slidesToShow: 3
  	  }
    },
    {
	 breakpoint: 576,
	  settings: {
	    slidesToShow: 2
	  }
	},
	{
	 breakpoint: 450,
	  settings: {
	    slidesToShow: 1
	  }
	}
  ]
  });
});