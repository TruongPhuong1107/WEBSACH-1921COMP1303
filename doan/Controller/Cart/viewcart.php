<style>
.ech{
    color:black;
    font-size: 20px;
}
</style>
<?php
//session_start();

if(!isset($_SESSION['MyCart'])){
    echo "<p class=\"ech\"> Chưa có sản phẩm nào trong giỏ</p>";
}
else{
include_once("View/Cart/Cart1.php");
}
?>