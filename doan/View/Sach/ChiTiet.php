<style>
	.b_item{color:black;
	font-size:19;
	text-center;
	}
	.cart{
		background-color:#B40404;
		color:white;
	}
</style>

<?php
	//Xử lý cho một sach $row
	$gia = number_format($row['GiaBan']);
	$chuoisp = <<<EOD
	<table width:100%>
	<tr><td>
		<div class="t_item">
			<img alt="{$row['TenSach']}" title="{$row['TenSach']}" width="350" height="400" src="sach/{$row['Hinh']}" style="border-width:0px;" />
		</div>
		</td>
		<td style="width:5%"></td>
		<td>
		<div class="b_item" style="color: #264F73" > <font face = Time New Romant, size = 5 >
			<h2><b>{$row['TenSach']}</b></h2>
			<p></p>
			<h5>Mã SP: {$row['MaSach']}</h5>
			<b>Tác Giả: </b> {$row['TacGia']}
			<p></p>
			<p><b>Nhà Xuất Bản: </b>{$row['NXB']} </p>

			<p style="font-size: 18px">{$row['MoTa']}</p>
			<p></p>
			<div class="single" >
				<h6 class="new" style="font-size: 20px"> <b>Giá: {$gia} đ</b> </h6>
			</div>
			<br> 
			<div class="button">
			<a href="index.php?mod=Cart&act=Cart&id=$row[MaSach]"><button type="button"id="ctl00_cphContent_ucItemDetails_btnBuy" class="cart" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; ">Mua ngay</button></a>
			</div>
		</div>
		</td>
		
		</tr>
		</table>
EOD;
	echo $chuoisp;
?>