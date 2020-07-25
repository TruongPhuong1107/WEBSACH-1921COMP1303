<?php
include_once("Model/Sach.php");
$product = new Sach();
include_once("Model/Category.php");
$category=new Category();
$cate = $category->GetCategories();

include_once("view/Sach/them.php");
if(isset($_POST['btnSave']))
{
	include_once("Model/Upload.php");
	$TenSach = $_POST["txtTenSach"];
	$Hinh = Upload::UploadImage("txtImageUrl","sach");
	$GiaBan=$_POST["txtGiaBan"];
	$TacGia=$_POST["txtTacGia"];
	$NXB=$_POST["txtNXB"];
	$MoTa=addslashes($_POST['txtMoTa']);
	$MaLoai=$_POST["cboLoaiSach"];
	if($Hinh!="")
	{	
		if(is_numeric($GiaBan))
		{
			$ret = $product->InsertSach($MaLoai, $TenSach, $Hinh, $GiaBan, $TacGia, $NXB, $MoTa);
			if($ret>0)
			{
				header("location:admin.php?mod=Sach&act=QuanLy");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		else
		{
			echo "<p>Giá không hợp lệ</p>";
		}
	
	}
	else
	{
		echo "<p>Vui lòng chọn file ảnh </p>";
	}
}
?>