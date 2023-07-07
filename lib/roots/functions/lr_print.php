<?php
function lr_print($var,$nome=''){
	if($nome!=''){
		echo '<div style="color:gold;background-color:#000;font-size:15px;font-width:bold;font-family:Verdana;padding:10px">'.$nome.'</div>';
	}
	$type=gettype($var);
	switch($type){
		case 'array':
			echo '<div style="background-color:#40d;color:#FFF;padding:10px;margin:0px 0px 10px 0px;border:1px solid #CCC;font-size:15px;font-width:400;font-family:Verdana">';
				echo '<div style="background-color:#60F;padding:10px;margin:10px 0px;">Array</div>';
				echo '<pre>';
				print_r($var);
				echo '</pre>';
			echo '</div>';
			break;
		case 'object':
			echo '<div style="background-color:#d04;color:#FFF;padding:10px;margin:0px 0px 10px 0px;border:1px solid #CCC;font-size:15px;font-width:400;font-family:Verdana">';
				echo '<div style="background-color:#f06;padding:10px;margin:10px 0px;">Array</div>';
				echo '<pre>';
				print_r($var);
				echo '</pre>';
			echo '</div>';
			break;

		default:
			echo '<div>';
				echo '<div style="background-color:#60F;">'.$type.'</div>';
				echo '<pre>';
				print_r($var);
				echo '</pre>';
			echo '</div>';
			break;
	}
}