<?php
class Session{
	 public static function init(){
	 	//session_start();//3
	 }
	 
	 public static function set($key, $val){
	 	$_SESSION[$key] = $val;
	 }

	 public static function get($key){
	 	if (isset($_SESSION[$key])) {
	 		return $_SESSION[$key];
	 	} else {
	 		return false;
	 	}
	 }
		public static function checkAdminSession(){
	 	self::init();
	 	if (self::get("adminLogin") == false) {
	 		self::destroy();
	 		header("Location:login.php");
	 	}
	 }
	  public static function checkAdminLogin(){
	 	self::init();
	 	if (self::get("adminLogin") == true) {//2
	 		header("Location:index.php");
	 	}
	 }
	 public static function checkSession(){
	
	 	if (self::get("login") == true) {//1
	 		self::destroy();
	 		header("Location:index.php");
	 	}
	 }

	 public static function checkLogin(){
	 	self::init();
	 	if (self::get("login") == true) {
	 		header("Location:exam.php");
	 	}
	 }

	 public static function destroy(){
	 	session_destroy();
		session_unset();
	 }
}

?>