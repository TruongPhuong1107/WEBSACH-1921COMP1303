<?php ob_start();?>
<form action="index.php?mod=order&act=viewinfo" method="post">
<table>
               <td style="width:50%"></td>
               <td>            
                        <div class="info-form" style="color: #264F73 ">
                        <h1 style="color: #264F73; font-size: 35px">Thông tin đặt hàng</h1>
                            <div class="add-input" >
                              <h2>  Họ tên:</h2>
                                <input class="myname" type="text" name="hoten" required maxlength="50" placeholder="Họ tên">                                
                           </div>
                           <div class="add-input">
                                <h2>Địa chỉ:</h2>
                                <input class="myname" type="text" name="diachi" required maxlength="25" placeholder="Nhập địa chỉ....">
                                </div> 
                                <div class="add-input">
                               <h2>Số điện thoại:</h2>
                                <input class="myname" type="text" name="sdt">
                                </div>
                                <div class="add-input">
                                <h2>Email:</h2>
                              <input class="myname" type="text" name="email" required maxlength="25" >
                                 </div>
                                 <div class="btn-input"> <br> <br> <br>
                            <button class="myname2" name ="submit" type="submit" style="background-color: #BE2623; color: white; border: #EFF4F5; border-radius: 5px; ">
                                Thanh toán
                            </button>
                            </div>
                    </div>          
                    </td>
                    <td></td>
 </table>
 </form>    
 <?php ob_end_flush();?>       