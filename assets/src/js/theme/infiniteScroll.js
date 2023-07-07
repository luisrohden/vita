
jQuery(function($){
	$(".loadMore a").on('click',function(event){
		event.preventDefault();
		url=$(this).attr('href');
		$(".loadMoreBox").show();
		$(".loadMore").hide();
		info={
			action :'load_infinite_scroll',
			url : url,
		};
		var jqxhr = $.post(ajaxTheme.url, info, function() {
		}).done(function(postsLinks) {
			postsLinks=jQuery.parseJSON(postsLinks);
		    $(".infiniteScrollPosts").append(postsLinks.posts);
		    console.log("postsLinks.link:"+postsLinks.link);
		    if(postsLinks.link!=''){
		    	$(".loadMore a").attr('href',postsLinks.link);
		    }else{
		    	$(".loadMore a").hide();
		    }
		    $(".loadMoreBox").hide();
			$(".loadMore").show();
		}).fail(function() {
		    console.log( "error" );
		}).always(function() {
		    
		});
	});
})