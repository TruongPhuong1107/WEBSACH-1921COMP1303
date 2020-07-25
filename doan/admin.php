<?php
	session_start();
	ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Admin</title>
<style>
#archive ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #264F73;
  position: fixed;
  top: 0;
  width: 100%;
}

#archive li {
  list-style-type: none;
  float: left;
  border-right:1px solid #bbb;
}

#archive li:last-child {
  border-right: none;
}

#archive li a {
 
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  width: 220px;
  background-color: #264F73;
}

#archive li a:hover:not(.active) {
  background-color: #5882FA;
}

.active {
  background-color: #4CAF50;
}


</style>
</head>

<body>
<div id="container-fluid">
<div id="menuright" class="noprint" >
        <div id="col-in" > 
            <h3 style="text-align: center; color: #264F73; font-size: 30px"><span>DANH MỤC QUẢN LÝ</h3></span>
            <ul id="archive" style="color: #264F73; font-size: 20px" >
                <li><a href="admin.php?mod=Sach&act=QuanLy" >Quản lý sản phẩm</a></li>
                <li><a href="admin.php?mod=User&act=QuanLyThanhVien">Quản lý thành viên</a></li>
                <li><a href="admin.php?mod=Category&act=QuanLyTheLoai">Quản lý thể loại</a></li>
                <li><a href="admin.php?mod=order&act=QuanLy">Quản lý hóa đơn</a></li>
				        <li><a href="admin.php?mod=admin&act=logoutadmin">Đăng xuất</a></li>
  <br> <br> <br> <br> 
            </ul>            
        </div> <!-- /col-in -->
    </div> <!-- /col -->
    <!-- Content -->
    <div id="content" style="margin: 25px 50px 0px 50px">
    <?php
            if(isset($_GET["mod"]))
            {
                include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
            }
            else
            {
                include_once("Controller/Sach/QuanLy.php");
            }
    ?>
    </div> <!-- /content -->
    
    <!-- Right column -->
    <br>
    <hr class="noscreen">
    <footer style="text-align:center; font-size:20px"><i class="fa fa-fw fa-copyright"></i>Bản quyền thuộc về NNPBook<br> Địa chỉ: 280 An Dương Vương, Phường 5, Quận 5, Tp.HCM</footer>

    
    
</div>        
</body>
</html>