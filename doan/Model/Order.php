<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
class Order
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertOrder($MaKH,$NoiGiao,$MaSach,$SoLuong,$sum,$sdt)
	{
		$sql="Insert into hoadon(MaKH,NgayDat,NoiGiao,MaSach,SoLuong,TongTien,sdt,TinhTrang) values('$MaKH',now(),'$NoiGiao','$MaSach','$SoLuong','$sum','$sdt', 'Mới đặt')";
		return $this->da->ExecuteQueryInsert($sql);
	}

	function DeleteOrder($MaHD)
	{
	
		$sql="Delete from hoadon where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetOrders()
	{
		$sql="Select MaHD,HoTen,NgayDat,NoiGiao,MaSach,SoLuong,TongTien,sdt,TinhTrang from hoadon o join khachhang u on u.MaKH = o.MaKH  order by NgayDat";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByID($id)
	{
		$sql="Select MaHD,TenSach,SoLuong,TongTien,Hinh ,NgayDat from hoadon a join sach p where a.MaKH=$id and a.MaSach=p.MaSach";
		return $this->da->FetchAll($sql);
	}
	function GetOrderManage()
	{
		$sql="Select MaKH,NgayDat,NoiGiao,MaSach,SoLuong,TongTien,sdt,TinhTrang from hoadon p join chitiethd c on p.MaHD=c.MaHD order by MaKH";
		return $this->da->FetchAll($sql);
	}
	function GetOrdersByUserID($id)
	{
		$sql="Select MaHD, MaKH, NgayDat from hoadon where MaKH=$id order by NgayDat desc";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>