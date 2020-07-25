<?php 
	
foreach($rs as $r)
{
	$gia = number_format($r['GiaBan']);
	$chuoixuat = <<<EOD
<!--Một hàng hóa-->
<div class="hh-box">	
	<div class="hh-box-promotion"></div>
    <div class="hh-box-qua"></div>
	<a href="index.php?mod=Sach&act=ChiTiet&MaSach={$r['MaSach']}">
		<img src="sach/{$r['Hinh']}" class="hh-box-image">
	</a>
    <img src="Image/icon-new.png" class="hh-box-new" >
    <div class="hh-box-name" style="color:black">{$r['TenSach']}</div>
    <div class="hh-box-gia" style="color:black">{$gia} đ</div>
	<div class="hh-mua" masach="{$r['MaSach']}"></div>
	 
</div>
<!--End Một hàng hóa-->
 
EOD;
	echo $chuoixuat;
}

?>