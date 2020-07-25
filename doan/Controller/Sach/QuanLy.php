<?php
	include_once("Model/Sach.php");
	$Product = new Sach();
	$ret=$Product->GetSachManage();
	include_once("View/Sach/QuanLy.php");
?>