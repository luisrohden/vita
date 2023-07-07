<?php
function showSwiper($args){
	/*
	$ARGS=array(
		autoplay => true,false
		'type'=> photos,content 
		'content'=>$slides
		'perView'=>1
	)
	*/
	if(!isset($args['perView'])){
		$args['perView'] = 1;
	}
	global $showSwiperControl;
	$showSwiperControl++;
	?>
	<div class="showSwiperControl_<?php echo $showSwiperControl;?>">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		    	<?php
		    	foreach($args['content'] as $slide):

		    		switch ($args['type']) {
		    			case 'content':
		    				?>
		    				<div class="swiper-slide"><?php echo $slide;?></div>
		    				<?php
		    				break;
		    			case 'photos':
		    				$image=wp_get_attachment_image_src($slide['imagem'],'original');
		    				?>
		    				<div class="swiper-slide" style="background-image:url(<?php echo $image[0];?>);">&nbsp;</div>
		    				<?php
		    				break;
		    		}
		    	endforeach;
		    	?>
		    </div>
		    <!-- Add Arrows -->
		    <?php
		    if(!isset($args['noNavegation']) || !$args['noNavegation']):
		    	?>
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			    <?php
			endif;
			if(isset($args['pagination']) && $args['pagination']):
				?>
				<div class="swiper-pagination"></div>
				<?php
			endif;
			
			?>
	  	</div>
  	</div>
	<script>
		document.addEventListener('DOMContentLoaded', function () {

			var showSwiperControl_<?php echo $showSwiperControl;?> = new Swiper('.showSwiperControl_<?php echo $showSwiperControl;?> .swiper-container', 
				{
					<?php
					if($args['autoplay']):
						?>
						autoplay: {
							delay: 5000,
						},
						<?php
					endif;
					if($args['perView']>0):
						?>
						slidesPerView: <?php echo $args['perView'];?>,
						<?php

					endif;

					?>
					loop:true,
					navigation: {
		        		nextEl: '.showSwiperControl_<?php echo $showSwiperControl;?> .swiper-button-next',
		        		prevEl: '.showSwiperControl_<?php echo $showSwiperControl;?> .swiper-button-prev',
					},
					pagination: {
						el: '.swiper-pagination',
						type: 'bullets',
						clickable: true,
					},
					<?php
					if(isset($args['breakpoints']) && is_array($args['breakpoints'])&&count($args['breakpoints'])):
						?>
						breakpoints: {
							<?php
							foreach($args['breakpoints'] as $k=>$v):
								?>
								<?php echo $k;?>:{
									<?php
									foreach($v as $k2=>$v2):
										?>
										<?php echo $k2;?>:<?php echo $v2;?>,
										<?php
									endforeach;
									?>
								},
								<?php
							endforeach;
							?>
						}
						<?php
					endif;
					?>
					

				}
			);
		}, false);

		
	  </script>
	<?php
}