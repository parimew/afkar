$(function(){
	// Menu Navigation
	$('.navigation li a').on('click',function(e){
		//e.preventDefault();
		
		vTarget = $(this).attr('href');
		
		//Scroll the window to the top
		//$('html, body').animate({scrollTop: $( "#" + vTarget).position().top - $('.navigation').outerHeight()}, 1500,'easeInOutCirc')
	})	
})
