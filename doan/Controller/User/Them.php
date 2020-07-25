<?php
include_once("Model/User.php");
 $user = new User();
include_once("View/User/Them.php");
if(isset($_POST['btnSave'])){
	$HoTen=$_POST["txtHoTen"];
	$DiaChi=$_POST["txtDiaChi"];
	$Email=$_POST["txtEmail"];
	$DienThoai=$_POST["txtSDT"];
	$TenDN=$_POST["txtTenDN"];
	$MatKhau=$_POST["txtMatKhau"];
	$ret=$user->InsertUser($TenDN,$MatKhau,$HoTen,$DiaChi,$DienThoai,$Email);
	if($ret>0)
		header("location:admin.php?mod=User&act=QuanLyThanhVien");
	else 
		echo"<p class=\"error\">Lỗi</p>";
}

?>