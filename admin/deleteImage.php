<?php 
include_once ("../functions.php");
$id=$_POST['img'];

$obj = new Register;
$res = $obj->delete_img($id);

?>