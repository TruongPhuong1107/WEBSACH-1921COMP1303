<?php
	include_once("Model/Sach.php");
	$product = new Sach();

	include_once("Model/Category.php");
	$category=new Category();
	$cate = $category->GetCategories();
	
	if(isset($_GET['id']))
	{
		$MaSach = $_GET['id'];
		$row = $product->GetSachByID($MaSach);
		include_once("View/Sach/sua.php");
		if(isset($_POST['btnChange']))
		{
			include_once("Model/Upload.php");
			$TenSach=$_POST["txtTenSach"];
			if(isset($_FILES['txtImageUrl']))
			$Hinh = Upload::UploadImage("txtImageUrl","sach");
			$GiaBan=$_POST["txtGiaBan"];
			$MoTa=addslashes($_POST['txtMoTa']);
			$MaLoai=$_POST["cboLoaiSach"];
			
			if($Hinh==""){
				$ret=$product->UpdateSach($MaSach,$MaLoai,$TenSach,$GiaBan,$MoTa);
			}
			else{
				$ret=$product->UpdateSach($MaSach,$MaLoai,$TenSach,$GiaBan,$MoTa,$Hinh);
			}
			if($ret>0)
			{
				header("location:admin.php?mod=Sach&act=QuanLy");
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
?>