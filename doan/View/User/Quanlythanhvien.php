<!-- Article -->

<div class="article">
	<h2><span><a href="admin.php?mod=User&act=QuanLyThanhVien" style="color: #264F73; font-size: 30px; text-decoration: none">Quản lý thành viên</a></span></h2>
<p>
<table width="90%" style="color: #264F73; ">
<thead>
	<tr id="thanhcongcu" style="color: #264F73; background-color: #EFF4F5; font-size: 18px;" >
			<th >Tên thành viên</th> 
            <th >Địa chỉ</th> 
            <th >Điện thoại</th> 
            <th class="text-center">Email</th> 
			<th >Tên đăng nhập</th> 
            <th >Mật khẩu</th> 

            </tr> 
			</thead>
<?php
foreach($ret as $row)
{
	echo "<tr><td>";
	echo $row['HoTen']."</td><td>";
	echo $row['DiaChi']."</td><td>";
	echo $row["DienThoai"]."</td><td>";
	echo $row["Email"]."</td><td>";
	echo $row["TenDN"]."</td><td>";
	echo $row["MatKhau"]."</td><td>";
echo "<a href=\"admin.php?mod=User&act=Xoa&id=$row[MaKH]\" onclick=\"return IsDelete()\"><button type='button' style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' ></i></button></a></td><td>";

echo "</td></tr>";
}
?>
</table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=User&act=Them"><button type="button" style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-plus' ></i></button></a></strong></p>
</div>
<!-- /article -->
