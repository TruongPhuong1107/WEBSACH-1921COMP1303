<?php
	include_once("Model/Sach.php");
	$product = new Sach();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$ret = $product->DeleteSach($id);
		if($ret > 0)
		{
			header("location:admin.php?mod=Sach&act=QuanLy");
		}
	}
?>