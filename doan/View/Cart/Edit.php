<div class="article">
<h2><span><a href="#" style="color: #264F73; font-size: 35px;">Sửa giỏ hàng</a></span></h2>
<p>
	<form method="post" action="index.php?mod=cart&act=edit&id=<?php echo $id; ?>" class="form" onSubmit="return IsEditCart()" style="color: #264F73; font-size: 18px">
    	<p><label>Sản phẩm </label><input type="text" name="txtProduct" id="txtProduct" value="<?php echo $productName; ?>" readonly="readonly" /></p>
        <p><label>Số lượng </label><input type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $quantity; ?>" ></p>
        <p><label>&nbsp;</label><input type="submit" name="btnSave" id="btnSave" value="Lưu thay đổi" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 3px; width:100px; height: 30px;/></p>
        <p id="error" class="error"></p>
    </form>
</p>
</div>