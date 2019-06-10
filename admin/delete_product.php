<?php
	include_once ("../functions.php");
	$id=$_GET['id'];
	
	$obj = new Register;

	$obj->delete($id);
?>