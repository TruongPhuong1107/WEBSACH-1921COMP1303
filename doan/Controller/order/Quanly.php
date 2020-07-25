<?php
	include_once("Model/Order.php");
	$Product = new Order();
    $ret=$Product->GetOrders();
    //var_dump($ret);
    include_once("View/Order/QuanLy.php");
?>