<?php
session_start();
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="../js/jquery-3.5.0.js"></script>
        <script src="../js/bootstrap.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/LayoutSach.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Sach.css" rel="stylesheet" />
    <link href="dangki.css" rel="stylesheet" />
    <link href="thongtin.css" rel="stylesheet" />
	<body>
        <div class="container-fluid" id="myContainer">
            <header id="mybanner" class="clearfix" >
                
                <div id="menunav1" class="clearfix" >
                    <nav class="float-right">
                   <?php if(isset($_SESSION['profile'])):?>
                    
                        <ul>
                            <li style="color: black "><a href="index.php?mod=order&act=orderedinfo"><?php echo $_SESSION['profile']['HoTen']?></a></li>
                            <li><a href="index.php?mod=User&act=Logout">Logout</a></li>
                        </ul>
                  
                   <?php else : ?>
                        <ul>
                            <li><a href="index.php?mod=User&act=login"><i class="fa fa-fw fa-user"></i>Login</a></li>
                            <li><a href="index.php?mod=User&act=Dangkythanhvien"><i class="fa fa-fw fa-pencil"></i>Register</a></li>
                        </ul>
                   <?php endif;?>
                    </nav>
                <h2 id="Namebook"><span id="nnp">NNP</span>BOOK</h2>                        
                </div>
                </header>
				<div class="container-fluid" >
				<div class="row" id="menunav">
				<div class="col-md-3" ><a href="index.php" id="home">
<font face = Time New Roman, size = 5 > <i style="size=5px" class="fa fa-home"></i> Trang chủ </font> </a></div>
				<div class="col-md-6 text-center">
                   <form action="index.php?mod=Sach&act=Search&id=name" method="post" >
                       <input type="text" name="txtName" id="txtName" placeholder="Tìm kiếm tựa sách, tác giả... "/>
                        <button class="fa fa-search" type="submit" name="btnSearch" id="btnSearch" style="width:35px; height:34px; border-radius:5px"></button>
                    </form>
                  
					</div>
                    
				<div class="col-md-3 " style="color: white"> 
              
<font face = Time New Roman, size = 5 > <i class="fa fa-phone"></i> Hotline: 0920110999 </font>
                <a href="index.php?mod=Cart&act=viewcart" >
                        <i class="fa fa-shopping-cart " id="fa" style="color:white;" ></i>
                </a>
                </div> 
               
				</div>
				</div>
				<div class="container-fluid" >
				<div class="row" style="height:30px">
				<div class="col-md-12  "></div>
				</div>
				</div>
				<div class="container-fluid" >
				<div class="row">
				<div class="col-md-2 "style=" background-color: #264F73; padding:0px">
				<font face = Time New Romant, size = 5 > 
				            
							<?php
                            include_once("Controller/Sach/LayLoai.php");
							?>
                          
							</font>
				</div>
				<div class="col-md-10 ">
                 <?php
				 if(isset($_GET["mod"]))
            {
                include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
            }
            else {
					 
                include_once("Controller/Sach/DanhSach.php");          
			}
			
                ?>
				</div>			
				</div>
                </div>
                
		
    </div>
    <br>
    <hr class="noscreen">
    <footer style="text-align:center; font-size:20px"><i class="fa fa-fw fa-copyright"></i>Bản quyền thuộc về NNPBook<br> Địa chỉ: 280 An Dương Vương, Phường 5, Quận 5, Tp.HCM</footer>

    </body>
</html>
