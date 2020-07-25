<?php
include_once("Model/Sach.php");
$bk= new Sach();
if(isset($_GET['MaLoai']))
	{
		$Ma_Loai = $_GET['MaLoai'];
		$rs= $bk->GetSachByCategory($Ma_Loai);
		include_once("View/Sach/XLlaysach.php");
	}
?>