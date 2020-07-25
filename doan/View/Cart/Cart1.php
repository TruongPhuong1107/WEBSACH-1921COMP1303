<html>
    <head>
    </head>
    <link href="../../css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../../css/bootstrap/LayoutSach.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <body>
        <div class="container-fluid" id="myContainer">
                <h2 class="text-center" style="color:Black">Giỏ hàng</h2>
                <div class="container-fluid"> 
                
                         <table id="cart" class="table table-hover table-condensed"> 
                        <thead> 
                            <tr id="thanhcongcu" style="color: #264F73; background-color: #EFF4F5; font-size: 18px;" >
                                 
                                <th >Tên sản phẩm</th> 
                                <th></th>
                                <th class="text-center" >Giá</th> 
                                <th class="text-center">Số lượng</th> 
                                <th > </th>
                                <th > </th>
                                <th class="text-center">Thành tiền</th> 
                                <th > </th> 
                            </tr> 
                        </thead> 
                    <tbody> 
                    <?php
                    $sum=0;
                    $v=$_SESSION["MyCart"];
                        foreach($v as $val) {
                            $sum+=($val["GiaBan"]*$val["quantity"]);
                            ?>
                         <tr>                          
                            <td ><img src="Sach/<?php echo $val["Hinh"] ?>" alt="Sản phẩm 1" class="img-responsive" width="100"></td> 
                            <td ><?php echo $val["TenSach"]?></td> 
                            
                            <td class="text-center" ><?php echo $val["GiaBan"]?> đ</td> 
                            
                            <td class="text-center" > <?php echo $val["quantity"]?></td> 
                            <td><a href="index.php?mod=Cart&act=Cart&id=<?php echo $val["MaSach"]?>" ><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></td>
                            <td><a href="index.php?mod=Cart&act=update&id=<?php echo $val["MaSach"]?>" ><i class="fa fa-minus-square-o" aria-hidden="true"></i></a></td>
                            <td  class="text-center"> <?php echo ($val["GiaBan"]*$val["quantity"])?></td> 
                            <td  data-th=""> 
                               <a  href="index.php?mod=Cart&act=xoa&id=<?php echo$val["MaSach"] ?>" onclick="return IsDelete()"> <button type= "button" class="btn btn-danger btn-sm" style="background-color: #BE2623"><i class="fa fa-trash-o" ></i> 
                                </button></a>
                            </td>                        
                        </tr> 
                        <?php
                        }                  
                        ?>
                    </tbody>
                    <tfoot> 
                        
                        <tr> 
            
                            <td colspan="2" class="hidden-xs"> </td> 
                            <td></td> 
                            <td>
							<td colspan="2" class="hidden-xs"> </td> 
                            <td class="hidden-xs text-center" style="font-size: 17px;"><strong>Tổng tiền: <?php echo $sum?> đ</strong> </td> 
                            <td>
							<?php if(isset($_SESSION['profile'])):?>
							<a href="index.php?mod=order&act=Getinfo"  class="btn btn-success btn-block" style="background-color: #BE2623; color: white; border: #EFF4F5; ">
							Thanh toán 
							<i class="fa fa-angle-right"></i></a>  
							<?php else :?>
							
                           <a href="index.php?mod=User&act=login"  class="btn btn-success btn-block" style="background-color: #BE2623; color: white; border: #EFF4F5; ">
							Thanh toán 
							<i class="fa fa-angle-right"></i></a>
							<?php endif;?>
							</td> 
                        </tr> 
                    </tfoot> 
                    
            
                    </table>
                      
                    
                </div> 
                       
            </div>

    </body>
    
</html>
