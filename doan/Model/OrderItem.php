<?php
include_once("DataProvider.php");
class OrderItem
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertOrderItem($MaHD,$MaSach,$SoLuong)
	{
		$sql="Insert into chitiethd(MaHD,MaSach,SoLuong) values($MaHD,$MaSach,$SoLuong)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($MaHD)
	{
		$sql="Delete from chitiethd where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	function GetOrderItemByOrder($MaHD)
	{
		$sql="Select chitiethd.MaSach,TenSach,GiaBan, chitiethd.SoLuong from chitiethd inner join Sach on chitiethd.MaSach=Sach.MaSach where MaHD=$MaHD";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>