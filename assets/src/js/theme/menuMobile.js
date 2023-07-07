jQuery(function($){
	$("#buttonMenuMobile").on('click',function(event){;
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$("#menuMobileBox ul").removeClass('open');
		}else{
			$(this).addClass('open');
			$("#menuMobileBox ul").addClass('open');
		}
	});
});