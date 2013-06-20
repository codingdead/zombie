<?php

require_once('html.php');

class Form_static extends HTML{

	public static function open($action, $method = 'post', $echo = true){
		$tag = self::make_tag('<form action="%s" method="%s">', $action, $method);
		
		if($echo) 	echo $tag;
		else 		return $tag;
	}




	public static function close($echo = true){
		$tag = '</form>';

		if($echo)  	echo $tag;
		else 		return $tag;
	}




	public static function input($type, $name, $value = '', $echo = true){
		$tag = self::make_tag('<input type="%s" name="%s" id="%s" value="%s">', $type, $name, $name, $value);
		
		if($echo)  	echo $tag;
		else 		return $tag;
	}




	public static function label($id, $text, $echo = true){
		$tag = self::make_tag('<label for="%s">%s</label>', $id, $text);
		
		if($echo)  	echo $tag;
		else 		return $tag;
	}




	public static function text_input_row($name, $text, $value = '', $echo = true){
		$tag = '<div class="row">';
		$tag .= self::label($name, $text, false);
		$tag .= self::input('text', $name, $value, false);
		$tag .= '</div>';

		if($echo)  	echo $tag;
		else 		return $tag;
	}


	public static function submit($name = 'submit', $value = 'Submit', $echo = true){
		$tag = self::input('submit', $name, $value);

		if($echo)  	echo $tag;
		else 		return $tag;
	}


	public static function hidden($name, $value = '', $echo = true){
	$tag = self::input('hidden', $name, $value);
		
		if($echo)  	echo $tag;
		else 		return $tag;
	}


	public static function text($name, $value = '', $echo = true){
	$tag = self::input('text', $name, $value);
		
		if($echo)  	echo $tag;
		else 		return $tag;
	}

	public static function file($name, $multiple = '', $echo = true){
		$tag = self::make_tag('<input type="file" name="%s" id="%s" %s>', $name.'[]', $name, $multiple);
		
		if($echo)  	echo $tag;
		else 		return $tag;
	}
}