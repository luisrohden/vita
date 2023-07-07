<?php
function format_text2link($text,$args=array()){
	if(!isset($args['format'])){
		$args['format']='email';
	}
	if(!isset($args['separator'])){
		$args['separator']='/';
	}
	$return='';
	$text=explode($args['separator'],$text);
	switch($args['format']){
		case 'phone':
			foreach($text as $piece):
				$piece=preg_replace('/[^0-9]/', '',$piece);
				if(strlen($piece)<12)$number='+55'.$piece;
				else $number='+'.$piece;
				$formated='';
				$formated=format_text2phone($piece);
				$return.='<a href="tel:'.$number.'" target="_blank" class="'.$args['classes'].'">'.$formated.'</a>';	
			endforeach;
			break;
		case 'email':
			
			foreach($text as $piece):
				$piece=trim($piece);
				$return.='<a href="mailto:'.$piece.'" target="_blank" class="'.$args['classes'].'">'.$piece.'</a>';	
			endforeach;
			
	}
	echo $return;
}
function format_text2phone($text){
	$return='';
	if(strlen($text)==10){
		$return='('.substr($text,0,2).') '.substr($text,2,4).'-'.substr($text,6,4);
	}
	if(strlen($piece)==11){
		$return='('.substr($text,0,2).') '.substr($text,2,5).'-'.substr($text,7,4);
	}
	return $return;
}