 <!-- Article -->
 <div class="article">
<h2><span><a href="admin.php?mod=Category&act=QuanLyTheLoai" style="color: #264F73; font-size: 30px; text-decoration: none">Quản lý thể loại</a></span></h2>
<p>
	<table width="30%" style="color: #264F73;">
	<thead>
	<tr id="thanhcongcu" style="color: #264F73; background-color: #EFF4F5; font-size: 18px;" >
			<th >Mã thể loại</th>             
            <th class="text-center">Tên thể loại</th> 
        </tr> 
	</thead>

    <?php
	$count = 0;
	foreach($ret as $row)
	{
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
		echo $row['MaLoai']."</td><td>";
		echo $row['TenLoai']."</td><td>";		
		echo "<a href=\"admin.php?mod=Category&act=Xoa&id=$row[MaLoai]\" onclick=\"return IsDelete()\"><button type='button' style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' ></i></button></a></td><td>";
		echo "<a href=\"admin.php?mod=Category&act=Sua&id=$row[MaLoai]\"><button type='button' style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-edit' ></i></button></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=Category&act=Them" ><button type="button" style='background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:30px; height: 25px' class='btn btn-danger btn-sm'><i class='fa fa-plus' ></i></button></a></strong></p>
