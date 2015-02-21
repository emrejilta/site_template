<?
#language
	session_start();
	header('Cache-control: private'); // IE 6 FIX

	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
		// register the session and set the cookie
		$_SESSION['lang'] = $lang;
		setcookie("lang", $lang, time() + (3600 * 24 * 30));
	}
	else if(isset($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
	}	
	else if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}
	else{
		$lang = 'tr';
	}

	switch ($lang) {
	  case 'tr':
	  $lang_file = 'lang.tr.php';
	  break;

	  case 'en':
	  $lang_file = 'lang.en.php';
	  break;

	  default:
	  $lang_file = 'lang.tr.php';
	}
	
	include "file/".$lang_file;
?>