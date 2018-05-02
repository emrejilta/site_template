<?
	include "vt.php";
	header('Location:../index.php');
	
	//post
	
	$db = new vt("localhost","","","");
	$db->connect();
	$db->select();
	$db->query("...");
?>
