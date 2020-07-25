<style>car
.error{
color:black;
}
</style>
<?php
//session_start();
include_once("Model/Sach.php");

$product=new Sach();
if(isset($_GET['id'])){
	$id=$_GET['id'];
    $row=$product->GetSachByID($id);
    
    if(isset($_SESSION["MyCart"][$id])){
        $_SESSION["MyCart"][$id]["quantity"]+=1;
    }
    else{
        $row["quantity"] =1;
       
       $_SESSION["MyCart"][$id] =$row;
    }
    include_once("View/Cart/Cart1.php");
}
?>