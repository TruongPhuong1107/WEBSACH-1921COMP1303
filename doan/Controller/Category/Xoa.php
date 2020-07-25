<?php 
include_once("Model/Category.php");
$Cate=new Category();
if(isset($_GET['id'])){
$MaLoai=$_GET['id'];
$ret=$Cate->DeleteCategory($MaLoai);
if($ret>0)
	header ("location:admin.php?mod=Category&act=QuanLyTheLoai");
else "<p class=\"error\">Lỗi</p>";

}
?>