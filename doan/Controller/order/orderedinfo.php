<style>
.nt{
    color:#264F73;
}
</style>
<?php
include_once("Model/Order.php");
$gt=new Order();
//$t=$_SESSION['profile']['MaKH'];
//echo $t;
$ret=$gt->GetOrderByID($_SESSION['profile']['MaKH']);
include_once("View/order/orderedinfo.php");
//if($row>0) echo 'jdhsj';
//<img src="Image/icon-new.png" class="hh-box-new" >
//echo $row['MaHD'];
//var_dump($ret);
//var_dum($_SESSION['profile']);

?>
