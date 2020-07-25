<div class="article" id="cart">
<h2><span><a href="#">Chi tiết giỏ hàng</a></span></h2>
<p>
<table  cellpadding="0" cellspacing="0" class="table" width="100%">
        <tr><td>Sản phẩm</td><td>Đơn giá</td><td>Số lượng</td><td>Xóa</td><td>Sửa</td></tr>
<?php
$sum=0;
foreach($_SESSION["MyCart"] as $val)
        {
			$sum+=$val['quantity']*$val["Giaban"];
            echo "<tr>";
            echo "<td><img height=\"50\"src=\"Sach/$val[Hinh]\" /></td>";
			echo "<td>".number_format($val["GiaBan"],0)."</td>";
            echo "<td>$val[quantity]</td>";
			echo "<td><a href=\"index.php?mod=cart&act=delete&id=$val[id]\" onclick=\"return IsDelete()\" ><img src=\"Images/Delete.gif\" width=\"16\" height=\"16\" /></a></td>";
			echo "<td><a href=\"index.php?mod=cart&act=edit&id=$val[id]\"><img src=\"Images/Edit.gif\" /></a></td>";
            echo "</tr>";
        }
?>
<tr><td>Tổng tiền</td><td colspan="4"><?php echo number_format($sum,0);?></td></tr>
</table>
<center><a href="index.php?mod=order&act=add" >Lưu thành hóa đơn</a></center>
</p>
</div>
<div class="row"> 
                                <div class="col-sm-2 hidden-xs">
                                    <img src="Sach/<?php echo $val["Hinh"]; ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
                                </div> 
                                <div class="col-sm-10"> 
                                <p class="text-center" style="color: #264F73;  font-size: 20px;"><?php echo $val["TenSach"];?></p>                                 
                                </div> 
                                </div> 
