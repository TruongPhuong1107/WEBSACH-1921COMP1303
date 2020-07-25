<?php
foreach($rs as $row)
{
	$gia = number_format($row['GiaBan']);
	$chuoixuat = <<<EOD
<!--Một hàng hóa-->
<div class="hh-box">	
	<div class="hh-box-promotion"></div>
    <div class="hh-box-qua"></div>
	<a href="index.php?mod=Sach&act=ChiTiet&MaSach={$row['MaSach']}">
		<img src="sach/{$row['Hinh']}" class="hh-box-image">
	</a>
	<div class="hh-box-gia" style="color:black">{$gia} đ</div>
	<div class="hh-box-name" style="color:black">{$row['TenSach']}</div>
	<div class="hh-mua" masach="{$row['MaSach']}"></div>
	 
</div>
<!--End Một hàng hóa-->
 
EOD;
	echo $chuoixuat;
}
?>

