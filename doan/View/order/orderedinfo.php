<h2 style="color: #264F73; font-size:35px"> Chi tiết hóa đơn đã đặt</h2>

<table width="90%" style="color: #264F73; font-size:18px;">
<thead>
    <tr> 
    <br>
    <th> </th>
    <th class="text-center">Tên sách </th>
    <th> Ngày đặt </th>
    <th>Số lượng </th>
    <th>Tổng tiền </th>
</thead>
<?php
foreach($ret as $row)
{
    echo "<tr><td >";
    echo "<img src=\"sach/$row[Hinh]\" heigh=\"90\"  width=\"90\" /></td><td>";
	echo $row['TenSach']."</td><td>";
	echo $row['NgayDat']."</td><td>";
	echo $row['SoLuong']."</td><td>";
	echo $row['TongTien']."</td><td>";
echo "</td></tr>";
}
?>



</table>


