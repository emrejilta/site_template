<?
	include "vt.php";
	header('Location:../index.php');
	
	//post
	
	$db = new vt("localhost","tubitetn","iC5qt0Yr74","tubitetn_uyeler");
	$db->connect();
	$db->select();
	$db->query("...");
?>