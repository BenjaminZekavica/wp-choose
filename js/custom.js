 $(document).ready(function() {
 		$('html').addClass('js');
		
		 var navToggle = ['<div id="hamburger">☰</div>'].join("");
		 $("nav").prepend(navToggle)
  });

  $(function() {
	  var pull 		= $('#hamburger');
		  menu 		= $('#site-nav');
  
	  $(pull).on('click', function(e) {
		  e.preventDefault();
		  menu.slideToggle();
	  });
  
	  $(window).resize(function(){
		  var w = $(window).width();
		  if(w > 655 && menu.is(':hidden')) {
			  menu.removeAttr('style');
		  }
	  });
  });
