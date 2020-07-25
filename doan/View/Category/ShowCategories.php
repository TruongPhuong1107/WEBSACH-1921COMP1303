<style>
.vertical-menu {
  width: 224px;
}

.vertical-menu a {
  color: white;
  display: block;
  padding: 22px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #5882FA;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}
.icon{
  width:30px ;
  height:30px;
  color:white;
}
</style>
<div class="vertical-menu">

    <?php
    foreach($result as $row)
		{
			echo "<a href=\"index.php?mod=Sach&act=XLlaysach&MaLoai=$row[MaLoai]\"><img class=\"icon\" src=\"Image/icon.png\" /> $row[TenLoai]</a>";
		}
  ?>
  </div>
<hr class="noscreen">