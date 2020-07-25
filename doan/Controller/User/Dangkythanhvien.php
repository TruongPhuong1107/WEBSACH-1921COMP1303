<style>
                
                    #ten{
                        text-align: left;    
                        color: #264F73;
                        font-size: 30px;
                    }
                    #gioitinh {
                        color:#264F73;
                        border:#264F73 solid 1px;
                        border-radius: 5px;
                        padding: 5px;
                        background-color: #EFF4F5
                    }
                    .table{
                        margin: 0 auto; 
                    } 
                    .myname{
                        width: 300px;   
                        color:black;    
                        background-color: white;
                        padding: 5px;            
                        border-radius: 5px;
                        background-color: #EFF4F5
                    }
                    .myname2{
                        width: 100px;   
                        color:white;    
                        background-color:#264F73;
                        border-radius: 5px;
                    }
                    td{
                        color:#264F73;
                        font-size: 14px;
                    }
                    td:nth-child(odd){
                        text-align: left;
                    }
                    .login-form{
                        text-align:center;
                        max-width: 650px;
                        margin: 20px auto;
                        background-color: white;
                        padding: 30px;
                        border: 1.5px solid #264F73;
                        border-radius: 8px;
                    }
                </style>
                <body>
                    <br> 
                    <div class="login-form">
                        <h2 id=ten>Đăng kí tài khoản NNPBOOK</h2>
                    <br>
                    <form method="POST" enctype="multipart/form-data" > 
                        <table>
                            <tr>
                                <td><i class="fa fa-fw fa-user-circle"></i>Họ tên:</td>
                                <td>
                                    <input class="myname" type="text" id="HoTen" name="HoTen" required maxlength="50" placeholder="Họ tên">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-user"></i>Tên đăng nhập:</td>
                                <td>
                                    <input class="myname" type="text" id="TenDN" name="TenDN" required maxlength="25" placeholder="Tên đăng nhập">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-lock"></i>Mật khẩu:</td>
                                <td>
                                    <input class="myname" type="password" id="MatKhau" name="MatKhau">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-pencil"></i>Nhập lại mật khẩu:</td>
                                <td>
                                    <input class="myname" type="password" id="NhaplaiMK" name="NhaplaiMK">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-envelope"></i>Email:</td>
                                <td>
                                    <input class="myname" type="text" id="Email" name ="Email" required maxlength="25" >
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-home"></i>Địa chỉ:</td>
                                <td>
                                    <input class="myname" type="text" id="Diachi" name ="Diachi" required maxlength="25" >
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-phone"></i>Số điện thoại:</td>
                                <td>
                                    <input class="myname" type="text" id="DienThoai" name="DienThoai" required maxlength="25">
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-fw fa-heart"></i>Giới tính:</td>
                                <td>
                                    <select name="GioiTinh" id="GioiTinh">
                                        <option value="0">Nam</option>
                                        <option value="1">Nu</option>
                                    </select> 
                                </td>
                            </tr>
                            </table>
                        <br>
                        <td colspan="2" style="text-align: center;">
                            <button class="myname2" type="submit" name="btn-submit">Đăng kí</button>
                            
                            <button class="myname2" type="reset">Nhập lại</button>
                        </td>
                    </div>
                    </form>
<?php
                        include_once("Model/User.php");
                        $us=new  User();
                        if(isset($_POST["btn-submit"]))
                                {
                                    $HoTen = $_POST["HoTen"];
                                    $TenDN = $_POST["TenDN"];
                                    $MatKhau = $_POST["MatKhau"];
                                    $DiaChi=$_POST["Diachi"];
                                    $Email = $_POST["Email"];
                                    $DienThoai = $_POST["DienThoai"];
                                    $sqlKH = $us->InsertUser($TenDN,$MatKhau,$HoTen,$DiaChi,$DienThoai,$Email);
                                   if( $sqlKH >0)
                                    header('Location:index.php?mod=User&act=login');
                                    else
                                    echo "Đăng ký không thành công";
                                }    
?>
