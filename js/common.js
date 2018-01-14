
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

// Модальное окно - Таблица размеров
		//Открытие
$(document).ready(function(){
	$('#ruler').on('click', function(){
		$('#myModal').fadeIn();
	})
});

		//Закрытие - клик по крестику
$(document).ready(function(){
		$('.close').on('click', function(){
		$('#myModal').fadeOut();
	})
});

		//Закрытие - клик вне окна
$(document).ready(function(){
	$(window).on('click', function(event){
		var modal = document.getElementById("myModal");
		if(event.target == modal){
			$('#myModal').fadeOut();
		}
	})
});

//Contacts - Часы
var digits_map = [[".item--1", ".item--2", ".item--3", ".item--5", ".item--6", ".item--7"],
	[".item--3", ".item--6"],
	[".item--1", ".item--3", ".item--4", ".item--5", ".item--7"],
	[".item--1", ".item--3", ".item--4", ".item--6", ".item--7"],
	[".item--2", ".item--3", ".item--4", ".item--6"],
	[".item--1", ".item--2", ".item--4", ".item--6", ".item--7"],
	[".item--1", ".item--2", ".item--4", ".item--5", ".item--6", ".item--7"],
	[".item--1", ".item--3", ".item--6"],
	[".item--1", ".item--2", ".item--3", ".item--4", ".item--5", ".item--6", ".item--7"],
	[".item--1", ".item--2", ".item--3", ".item--4", ".item--6", ".item--7"]
	];

var head = document.querySelector('head');
head.insertAdjacentHTML('beforeend', '<style id="coloring"></style>');
var style_container = document.getElementById("coloring");

var color_step = 0;
var color_steps_max = 12;
var color_period = 1;
var color_time_counter = 0;
var color_class = "js-color--active";

var digits = document.querySelectorAll('.digit');
var digit_item_class = ".digit__item";
var digits_items = document.querySelectorAll(".digit__item");
var dottes = document.querySelector(".dottes");
var dottes_items = document.querySelectorAll(".dottes__item");

setTime();
var interval = setInterval(setTime,1000);	

function setTime() {

	var now = new Date();
	var hour = now.getHours() >= 10 ? now.getHours() : "0" + now.getHours();
	var min = now.getMinutes() >= 10 ? now.getMinutes() : "0" + now.getMinutes();
	var sec = now.getSeconds() >= 10 ? now.getSeconds() : "0" + now.getSeconds();
	var date_string = hour + "" + min + "" + sec;

	for ( var i = 0; i < digits.length; i++ ) {
		
		var digit = digits[i];
		var digit_value = +date_string.charAt(i);

		remove_class_from_items (digit, color_class);
		remove_class_from_elem(dottes, color_class);

		var digit_elems_classes = digits_map[digit_value];

		if ( digit_elems_classes.length > 0 ){
			for ( var l = 0; l < digit_elems_classes.length; l++ ){
				var item = digit.querySelector(digit_elems_classes[l]);
				item.classList.add( color_class  );
			}
		}	
	}
	change_color_by_style();
}
function add_class_to_items ( elem ) {
	var items = elem.querySelectorAll(".item");

	for ( var i = 0; i < items.length; i++ ){
		items[i].classList.add ( class_color );
	}
}
function remove_class_from_items ( elem, class_prefix ) {
	var items = elem.querySelectorAll(".item");

	for ( var i = 0; i < items.length; i++ ){
		remove_class_from_elem(items[i], class_prefix);
	}
}
function remove_class_from_elem ( elem, class_prefix ) {
	var classes = elem.classList;
			
	for ( var k = 0; k < classes.length; k++ ){
		if ( classes[k].indexOf(class_prefix) >= 0 ){
			elem.classList.remove(classes[k]);
		}
	}
}
function change_color_by_style(){
	var hue_value = 360 / color_steps_max * color_step;
	var bright_value = 50; 
	var current_color = "hsl(" + hue_value + ", 70%, " + bright_value + "%)";
	var color_class_local = "." + color_class;
	var styles = color_class_local + " { background: " + '#178AE5' + "; }";
		styles += color_class_local + ":before, " + color_class_local + ":after { border-color: " + '#178AE5' + "; }";
	style_container.innerHTML = styles;

	if ( color_step < color_steps_max ){
		color_step++;
	}
	else {
		color_step = 0;
	}
}