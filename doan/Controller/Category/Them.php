<?php
include_once("Model/Category.php");
$Cate= new Category();
include_once("View/Category/Them.php");
if(isset($_POST['btnSave'])){
	
	$TenLoai=$_POST["txtCategoryName"];
	$ret=$Cate->InsertCategory($TenLoai);
	if($ret>0)
		header("location:admin.php?mod=Category&act=QuanLyTheLoai");
	else 
		echo "<p class=\"error\">Lỗi</p>";
}
?>