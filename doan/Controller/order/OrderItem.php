<?php
//session_start();
include_once("Model/OrderItem.php");
$or=new OrderItem();
foreach($_SESSION['MyCart'] as $val){
    $isr=$or->InsertOrderItem(1,$val['MaSach'],$val['quantity']);
}
?>