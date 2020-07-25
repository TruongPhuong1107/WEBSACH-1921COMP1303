<?php
//session_start();
include_once("Model/Sach.php");
	$product = new Sach();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		unset($_SESSION["MyCart"][$id]);
		
			header("location:index.php?mod=Cart&act=viewcart");
		
	}
?>