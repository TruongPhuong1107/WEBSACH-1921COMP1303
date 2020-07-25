<style>
p{
	color:black;
}
</style>
<?php
include_once("Model/Sach.php");
		$product = new Sach();
		
if(isset($_POST['btnSearch'])){
	$name=$_POST["txtName"];
	if($name != "")
	{
		$rs = $product->SearchSach($name);
		include_once("View/Sach/Search.php");
	}
}
else
				echo "<p class=\"error\">Lỗi</p>";
?>