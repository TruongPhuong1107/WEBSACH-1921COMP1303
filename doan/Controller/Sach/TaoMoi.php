<?php
	include_once("Model/Sach.php");
	include_once("Model/Pages.php");
	$prod = new Sach();
	define('MAX',6);
	$start = Pages::findStart(MAX);
	$count = $prod->CountSach();
	$pages = Pages::findPages($count,MAX);
		
	$result=$prod->GetSach($start,MAX);
	include_once("View/Sach/TaoMoi.php");
?>