<?php
function set_background_gradient($selector,$args){
	$breakpoints='';
	foreach($args['breakpoints'] as $key=>$breakpoint){
		list($r, $g, $b) = sscanf($args['colors'][$key], "#%02x%02x%02x");
		$breakpoints.='rgba('.$r.','.$g.','.$b.','.$args['opacities'][$key].') '.$breakpoint.'%,';
	}
	$breakpoints=substr($breakpoints,0,-1);
	echo '
	<style>
	'.$selector.'{
		background: -moz-linear-gradient(top,  '.$breakpoints.'); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  '.$breakpoints.'); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  '.$breakpoints.'); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\''.$args['colors'][0].'\', endColorstr=\''.$args['colors'][$key].'\',GradientType=0 ); /* IE6-9 */
	}
	</style>';
}