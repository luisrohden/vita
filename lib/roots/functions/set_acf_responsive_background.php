<?php
function set_acf_responsive_background($selector,$field,$args=array()){
	if( isset($args['size']) && $args['size'] ){
		echo '
		<style>
		'.$selector.'{
			background-image:url('.$field['sizes'][$args['size']].');	
		}
		</style>
		';

	}
	else{
		echo '
		<style>
		@media(max-width:992px){
			'.$selector.'{
				background-image:url('.$field['sizes']['large'].');	
			}
		}
		@media(min-width:993px){
			'.$selector.'{
				background-image:url('.$field['url'].');
			}
			
		}
		</style>
		';
	}
}