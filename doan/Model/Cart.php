<?php
class Cart
{
	public static function InsertCart($id)
	{
		if(isset($_SESSION["MyCart"][$id]))
			$_SESSION["MyCart"][$id]++;
		else
			$_SESSION["MyCart"][$id] = 1;
	}
	
	public static function DeleteCart($id)
	{
		if(isset($_SESSION["MyCart"][$id]))
			unset($_SESSION["MyCart"][$id]);
	}
	
	public static function UpdateCart($id, $quantity)
	{
		if(isset($_SESSION["MyCart"][$id]))
			$_SESSION["MyCart"][$id] = $quantity;
	}
	
	public static function Display()
	{
		include_once("DataProvider.php");
		$sum = 0;
		foreach($_SESSION['MyCart'] as $MaSach => $SoLuong)
		{
			$rs= DataProvider::ExecuteQuery("SELECT GiaBan FROM sach WHERE MaSach = $MaSach");
			$row = $rs->fetch();
			$sum += $SoLuong * $row['GiaBan'];
		}
		return "Số MH: ".count($_SESSION['MyCart'])."<br>Tổng tiền: $sum";
	}
}
?>