<!-- Article -->

<div class="article">
	<h2><span><a href="admin.php?mod=Sach&act=QuanLy" style="color: #264F73; font-size: 30px; text-decoration: none;">Quản lý sản phẩm</a></span></h2>
<p>

<table width="90%" style="color: #264F73">
<thead> 
        <tr id="thanhcongcu" style="color: #264F73; background-color: #EFF4F5; font-size: 18px;" > 
            <th >Tên sản phẩm</th> 
            <th >Thể loại</th> 
            <th >Giá</th> 
            <th class="text-center">Hình</th> 
			<th >Tác giả</th> 
            <th >Nhà xuất bản</th> 

            </tr> 
</thead> 
<?php
foreach($ret as $row)
{
	echo "<tr><td >";
	echo $row['TenSach']."</td><td>";
	echo $row['TenLoai']."</td><td>";
	echo number_format($row["GiaBan"],0)." đ</td><td>";
	
	echo "<img src=\"sach/$row[Hinh]\" width=\"70\" /></td><td>";
	echo $row['TacGia']."</td><td>";
	echo $row['NXB']."</td><td>";
echo "<a href=\"admin.php?mod=Sach&act=Xoa&id=$row[MaSach]\" onclick=\"return IsDelete()\"><button type='button' style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' ></i> </button></a></td><td>";
echo "<a href=\"admin.php?mod=Sach&act=Sua&id=$row[MaSach]\"><button type='button' style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-edit' ></i></button></a>";
echo "</td></tr>";
}
?>

</table>

</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=Sach&act=Them" ><button type="button" style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-plus' ></i></button></a></strong></p>
</div>
<!-- /article -->
                              
