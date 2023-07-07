jQuery(function($){
	$('.scrollToNextSection').click(function(e){
		e.preventDefault();
	    var $this = $(this),
	       	$next = $this.closest( "section" ).next();
	    $('html,body').animate({scrollTop: $next.offset().top}, 700, 'swing');
	});

});

