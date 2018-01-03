
//Burger menu 
$(document).ready(function(){
	$('.fa-bars').on('click', function(event){
			$('.menu-left-mobile').slideToggle();
			event.stopPropagation();
		});
});

//Header slide
$(window).scroll(function(){
    if ($(window).scrollTop() > 100) {
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