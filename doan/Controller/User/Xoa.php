<?php
	include_once("Model/User.php");
	$product = new User();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$ret = $product->DeleteUser($id);
		if($ret > 0)
		{
			header("location:admin.php?mod=User&act=QuanLyThanhVien");
		}
	}
?>