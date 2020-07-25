<?php
ob_start();
//session_start();
include_once("View/order/order.php");
include_once("Model/Order.php");
//include_once("Controller/order/OrderItem.php");
$ot=new Order();
$at=$_SESSION['profile']['MaKH'];
//$sum=0;
if(isset($_POST['submit'])){
    $dc=$_POST['diachi'];
    $sdt=$_POST['sdt'];
   foreach($_SESSION['MyCart'] as $val){
    //echo $val['MaSach'];
    //$isr=$or->InsertOrderItem(27,$val['MaSach'],$val['MaSach']);
    $sum=$val['quantity']*$val['GiaBan'];
    // echo $sum;
    $sm=$ot->InsertOrder($at,$dc,$val['MaSach'],$val['quantity'],$sum,$sdt);
    
}
//if($sm>0) echo 'Mua hàng thành công';
unset($_SESSION['MyCart']);
header('location:index.php');
}
ob_end_flush();
?>