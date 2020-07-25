<div style="width: 40%; padding: 0 10px 0 0; float: left; width: 520px; 
height:400px; color: #264f73; border: 2px solid #264f73; border-radius: 5px" >
    <div class="text-center"  style="color: #264f73; font-size: 30px">
        <b>Sản phẩm đã chọn</b>
    </div> <br>

    <table width="100%" style="color: #264f73;font-size:18px"> 
    <thead>
        <tr id="rong"> 
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
        </tr>
    </thead>

    <?php 
    $sum=0;
    foreach($_SESSION['MyCart'] as $val):?>
        <tr>
        <td><?php echo $val['TenSach']?></td>
        <td><?php echo $val['quantity']?></td>
        <td><?php echo $val['quantity']*$val['GiaBan']?></td>
        </tr>
        <td></td> 

        <?php $sum+=$val['quantity']*$val['GiaBan']?>
    <?php endforeach;?>
        <th>Tổng tiền: <?php echo $sum?></th> 

    </table>
        
    </div>

<div style=" padding: 0 10px 0 0; float: right;  width: 520px; 
height:400px; color: #264f73; border: 2px solid #264f73; border-radius: 5px">
    <div class="text-center"  style="color: #264f73; font-size: 30px">
            <b>Thông tin khách hàng</b>
    </div> <br>

    <table style="color: #264f73;font-size:20px">
    <thead>
        <td style="width:20%"></td>
        <td style="color: #264f73"> 
             
           <p>Họ Tên:  <?php echo $ht?> </p>
            <p>Địa chỉ:  <?php echo $dc?> </p>
            <p>Số điện thoại:  <?php echo $sdt?> </p>
            <p>Email:  <?php echo $eml?> </p>
        </td>

        </tr>
    </thead>
    </table>
</div>
<form action="index.php?mod=order&act=viewinfo" method="post">
<div class="text-center" style="clear: both;"><br><button style="background-color: #BE2623; color: white; border: #EFF4F5;width:120px; border-radius: 5px; height: 40px "type="submit" name="lastsubmit">Thanh toán</button></div>
</form>





