<?php 
include_once("Model/Order.php");
$de= new Order();
if(isset($_GET['id']))
	{
	$id = $_GET['id'];
$ret=$de->DeleteOrder($id);
if($ret>0)
 header('Location:admin.php?mod=order&act=Quanly');
    }
 ?>