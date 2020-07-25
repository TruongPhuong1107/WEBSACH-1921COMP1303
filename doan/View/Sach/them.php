<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=Sach&act=Them&id=name" style="color: #264F73; font-size: 30px; text-decoration: none">Thêm sản phẩm</a></span></h2>
     <p>
<form action="admin.php?mod=Sach&act=Them&id=name" method="post" class="form" enctype="multipart/form-data" style="color: #264F73; font-size: 18px;">
	<p><label>Tên sách </label><input type="text" name="txtTenSach" id="txtTenSach" /></p>
    <p><label>Loại (*) </label>
        <select name="cboLoaiSach">
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
                
		<p><label>Giá (*) </label><input type="text" name="txtGiaBan" id="txtGiaBan"  /></p>
		<p><label>Tác giả </label><input type="text" name="txtTacGia" id="txtTacGia"  /></p>
		<p><label>Nhà xuất bản </label><input type="text" name="txtNXB" id="txtNXB"  /></p>
        
        <p><label>Hình </label>
        
        <input type="file" name="txtImageUrl" id="txtImageUrl" style="color: #264F73; "/>
        	
        </p>
        <p><label>Mô tả </label><textarea name="txtMoTa" id="txtMoTa"></textarea></p> 
        
    <p><label>&nbsp;</label><input type="submit" name="btnSave" id="btnSave" value="Thêm" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:60px; height: 30px; font-size: 15px;"/></p>
</form>
	<script src="js/nicEdit.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
		bkLib.onDomLoaded(function() {
		new nicEditor({iconsPath : 'js/nicEditorIcons.gif'}).panelInstance('txtMoTa');
	});
	</script>
</p>
</div>