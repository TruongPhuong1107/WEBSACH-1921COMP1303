<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=Category&act=Sua&id=<?php echo $MaLoai; ?>" style="color: #264F73; font-size: 30px; text-decoration: none">Chỉnh sửa thể loại</a></span></h2>
     <p>
<form action="admin.php?mod=Category&act=Sua&id=<?php echo $MaLoai; ?>" method="post" class="form" style="color: #264F73; font-size: 18px">
	<p><label>Tên thể loại </label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['TenLoai']; ?>"/></p>    
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:100px; height: 30px;" /></p>
</form>
</p>
</div>