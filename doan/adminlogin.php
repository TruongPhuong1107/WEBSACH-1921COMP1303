<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 .login-form{
            max-width: 400px;
            background-color: white;
			color:black;
			border: 1.5px solid #264F73;
            border-radius: 8px;
            padding:20px
}
  .error{
         color: red;
         position:absolute;
         top :60px; 
         left: 500px;
      }
h1{
            color: #264F73;
            font-size: 23px;
            margin-bottom: 30px;
}
.input-box{
            margin-bottom: 15px;
        }
        .input-box input{
            padding: 8px 30px;
            width: 300px;
            border: 1px solid #264F73;
            outline: none;
            border-radius: 5px;
            background-color: #EFF4F5
        }
        .input-box h2 {
            color: #264F73;
            font-size: 15px;
        }
        .btn-box{
            text-align: right;
            margin-top: 30px;
        }
        .btn-box button{
            padding: 8px 30px;
            border-radius: 5px;
            background-color: #264F73;
            color: #ffffff;
            border: none;
            outline: none;
        }
</style>
<?php
session_start();
include_once("Model/User.php");
$us= new User();
if(isset($_POST['btnLogin'])){
	$tk=$_POST['user_name_lg'];
	$mk=$_POST['passlg'];
	$ret=$us->GetUserLogin($tk,$mk);
    $_SESSION['admin']=$ret;
	if(!isset($_SESSION['admin'])){
       echo "<p class=\"error\">Tên đăng nhập hoặc mật khẩu sai</p>";
    }
    else{
       header("location:admin.php"); exit();
      }
	
}

?>
<form action="" method="post">
           <table> 
           <tr>
            <td style="width:55%"></td> 
            <td>
            <div class="login-form">
                    <h1>Đăng nhập Admin</h1>
                    <div class="input-box">
                        <h2><i class="fa fa-fw fa-user"></i>Tên đăng nhập:</h2>
                        <input type="text" name="user_name_lg"id="user_name_lg" >
                    </div>
                    <div class="input-box">
                        <h2><i class="fa fa-fw fa-lock"></i>Mật khẩu:</h2>
                        <input type="password" name="passlg" id="passlg">
                    </div>
                    <div class="btn-box">
                        <button type="submit" name="btnLogin" id="btnLogin">Login</button>
                    </div>
            </div>
            </td>
            <td> </td> 
             </tr>       
           </table>
</form>