// $(document).ready(function(){ 
// 	$('.menu-left-mobile').hide();
// });

// $(function(){
// 	$('.burger').click(function(){
// 		$('.menu-left-mobile').toggle();
// 	})
// })



		// $('.burger').on('click', function(){
		// 	$('.menu-left-mobile').addClass('open');
		// });

$(document).ready(function(){
	$('.fa-bars').on('click', function(event){
			$('.menu-left-mobile').slideToggle();
			event.stopPropagation();
		});
});