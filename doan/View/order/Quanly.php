<style>
	td {
		text-align: center;
	}
	
</style>

<div class="article">
	<h2><span><a href="admin.php?mod=User&act=QuanLy" style="color: #264F73; font-size: 30px; text-decoration: none">Quản lý hóa đơn</a></span></h2>
<p>
<table width="90%" style="color: #264F73;" >
	<thead>
		<tr id="thanhcongcu" style="color: #264F73; background-color: #EFF4F5; font-size: 18px;" >
				<th >Tên khách hàng</th>             
				<th class="text-center">Địa chỉ</th> 
				<th >Số điện thoại</th>             
				<th >Ngày đặt</th>             
				<th >Mã sách</th>  
				<th >Số lượng</th>             
				<th >Thành tiền</th>             
				</tr> 
	</thead>
<?php
foreach($ret as $row)
{
	echo "<tr><td>";
	echo $row['HoTen']."</td><td>";
	echo $row['NoiGiao']."</td><td>";
	echo $row["sdt"]."</td><td>";
	echo $row["NgayDat"]."</td><td>";
    echo $row["MaSach"]."</td><td>";
    echo $row["SoLuong"]."</td><td>";
    echo $row["TongTien"]."</td><td>";

echo "</td></tr>";
}
?>
</table>
</p>

</div>
<!-- /article -->
<hr class="noscreen">