function UpdateTableHeaders() {
   $(".static").each(function() {
       var el			= $(this),
           offset		= el.offset(),
           scrollTop	= $(window).scrollTop(),
           fixedEl		= $(".fixed")
       
		if (scrollTop > offset.top) {
           fixedEl.css({"visibility": "visible"});
           el.css({"visibility": "hidden"});
       } else {
           fixedEl.css({"visibility": "hidden"});
           el.css({"visibility": "visible"});
       };
   });
}

$(function(){
	//Persistan Navigation
	$(window).scroll(UpdateTableHeaders).trigger("scroll");

});