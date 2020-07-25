<!-- Article --><div class="article">
<h2><span><a href="admin.php.php?mod=Sach&act=Sua&id=<?php echo $MaSach; ?>" style="color: #264F73; font-size: 30px; text-decoration: none">Chỉnh sửa sản phẩm</a></span></h2>
     <p>
<form action="admin.php?mod=Sach&act=Sua&id=<?php echo $MaSach; ?>" method="post" class="form" enctype="multipart/form-data" style="color: #264F73; font-size: 18px">
	<p><label>Tên sách </label><input type="text" name="txtTenSach" id="txtTenSach" value="<?php echo $row['TenSach']; ?>"/></p>
    <p><label>Loại (*) </label>
        <select name="cboLoaiSach" id="cboLoaiSach">
            <?php
				foreach($cate as $rowmanu)
				{
					if($rowmanu['MaLoai']==$row['MaLoai'])
					{
						echo "<option value=\"$rowmanu[MaLoai]\" selected=\"selected\" >$rowmanu[TenLoai]</option>";
					}
					else
						echo "<option value=\"$rowmanu[MaLoai]\" >$rowmanu[TenLoai]</option>";
				}
			?>
        </select></p>
                
        <p><label>Giá (*) </label><input type="text" name="txtGiaBan" id="txtGiaBan" value="<?php echo $row['GiaBan']; ?>" /></p>
        
        <p><label>Ảnh hiển thị </label>
        <img src="sach/<?php echo $row['Hinh'] ?>" width="100" />
        <input type="file" name="txtImageUrl" id="txtImageUrl"/>
        	
        </p>
        <p><label>Mô tả </label><textarea name="txtMoTa" id="txtMoTa" ><?php echo $row['MoTa']; ?></textarea></p>
        
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:120px; height: 35px; font-size:18" /></p>
</form>
	<script src="js/nicEdit.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
		bkLib.onDomLoaded(function() {
		new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('txtMoTa');
	});
	</script>
</p>
</div>