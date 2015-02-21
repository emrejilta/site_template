<?
	include "class/script.class.php";
	$s = new Script();
	
	
	//Google Font
	$s->css("http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900");
	
	//Modernizr
	$s->js("_include/js/modernizr.js");
	
	//Google Analytics
	include "analytics.php";
?>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">