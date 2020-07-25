<?php
//session_start();
include_once("Model/User.php");
$us=new User();
include_once("View/User/Login.php");
if(isset($_POST['btnLogin']))
{
    $tk = $_POST["user_name_lg"];
    $mk = $_POST["passlg"];
   $rows = $us->GetUserLogin($tk,$mk);
    $_SESSION['profile']=$rows;
    if(!isset( $_SESSION['profile'])){
     
       echo "<p class=\"error\">Tên đăng nhập hoặc mật khẩu sai</p>";
    }
    else{
       header("location:index.php"); exit();
      }
}
//var_dump($_SESSION['profile']);
?>
