<?php
include_once("Model/Sach.php");
$f = new Sach();
$rs = $f->GetSachManage();
if(isset($_GET["MaLoai"]))
	$rf = $f->GetSachByCategory($_GET["MaLoai"]);
include_once("View/Sach/DanhSach.php");
?>