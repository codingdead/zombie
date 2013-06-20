<?php

class HTML{

	public static function make_tag(){
		$args = func_get_args();
		$format = array_shift($args);

		return vsprintf($format, $args);
	}

	/*
	public static function handle_extras($info){
		foreach($info as $attribute => $value){
			$extras .= "$attribute=\"$value\" ";
		}

		return $extras;
	}
	*/

	public static function br(){
		echo self::make_tag('<br>');
	}
}