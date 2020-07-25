<?php
	if(isset($_GET["MaSach"]))
	{
		$MaSach=(int)$_GET["MaSach"];
		include_once("Model/Sach.php");
		$prod = new Sach();
		$row = $prod->GetSachByID($MaSach);
		$categoryID= $row['MaLoai'];
		$result = $prod->GetProductsOrther($MaSach,$categoryID);
		include_once("view/Sach/ChiTiet.php");
	}
?>