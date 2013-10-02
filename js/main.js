$(function(){
	// Menu Navigation
	$('.navigation li a').on('click',function(e){
		vTarget = $(this).attr('href');
		
		//If I'm in the Index, Make a Scroll
		var vUrl = location.pathname.substr(location.pathname.lastIndexOf("/")+1,location.pathname.length);
		if(vUrl == 'index.php' || vUrl == ''){
			$('html, body').animate({scrollTop: $(vTarget).position().top - $('.navigation').outerHeight()}, 1500,'easeInOutCirc');
			e.preventDefault();
		}
		else{ //Otherwise redirect with Hash
			window.location.replace('index.php' + vTarget);
		}
	});
	
	
	// URL Hashes
	var vTarget = window.location.hash;
    if (vTarget) {
        $('html, body').animate({scrollTop: $(vTarget).position().top - $('.navigation').outerHeight()}, 1500,'easeInOutCirc');
    }
})
