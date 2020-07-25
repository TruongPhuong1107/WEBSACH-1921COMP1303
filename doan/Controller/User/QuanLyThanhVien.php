<?php
	include_once("Model/User.php");
	$Product = new User();
	$ret=$Product->GetUsers();
	include_once("View/User/Quanlythanhvien.php");
?>