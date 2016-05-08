<?php

/*
This is Session Manager Created by Abdul Khodir :))
*/

class Session {

	/*Session Manager For My Simple MVC*/

//	private $startsession = false;


	public static function start(){
//		if(self::startsession == false){
			session_start();
//			self::startsession = true;
//		}
	}


	public static function set($key,$value){
		$_SESSION[$key] = $value;
	}


	public static function get($key , $secondkey = false){

		if($secondkey == true){
			if(isset($_SESSION[$key][$secondkey]))
				return $_SESSION[$key][$secondkey];

		}
		else{
			if(isset($_SESSION[$key]))
				return $_SESSION[$key];
		}

		return false;
	}

	public static function destroy(){
//		if($startsession == true){
			session_unset();
			session_destroy();
//		}
	}
}
