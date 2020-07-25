<?php
include_once("Model/Category.php");
$Cate= new Category();
if(isset($_GET['id'])){
	$MaLoai=$_GET['id'];
	$row=$Cate->GetCategoryById($MaLoai);
	include_once("View/Category/Sua.php");
	if(isset($_POST['btnChange'])){
	$TenLoai=$_POST["txtCategoryName"];
	$ret=$Cate->UpdateCategory($MaLoai,$TenLoai);
	if($ret>0)
		header("location:admin.php?mod=Category&act=QuanLyTheLoai");
	else
		echo "<p class=\"error\">Lỗi</p>";
	}
}
?>