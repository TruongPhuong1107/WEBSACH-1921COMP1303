<?php
include_once("Model/Order.php");
//include_once("Controller/order/OrderItem.php");
$ot=new Order();
//$sum=0;
if(isset($_POST['submit'])){
    $ht=$_POST['hoten'];
    $dc=$_POST['diachi'];
    $sdt=$_POST['sdt'];
    $eml=$_POST['email'];
    include_once("View/order/viewinfo.php");
    $_SESSION['info']=array("ht"=>$ht,"dc"=>$dc,"sdt"=>$sdt,"eml"=>$eml);

  //  var_dump($_SESSION['info']);
}
    $at=$_SESSION['profile']['MaKH'];
    $h=$_SESSION['info']['ht'];
    $d=$_SESSION['info']['dc'];
    $sd=$_SESSION['info']['sdt'];
    $em=$_SESSION['info']['eml'];

if(isset($_POST['lastsubmit'])){
   foreach($_SESSION['MyCart'] as $val){
    $sum=$val['quantity']*$val['GiaBan'];
    $sm=$ot->InsertOrder($at,$d,$val['MaSach'],$val['quantity'],$sum,$sd);
   }
unset($_SESSION['info']);
unset($_SESSION['MyCart']);
header('location:index.php');
}
?>