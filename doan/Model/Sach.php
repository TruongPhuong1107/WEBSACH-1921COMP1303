<?php
include_once("DataProvider.php");
class Sach
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertSach($MaLoai,$TenSach,$Hinh,$GiaBan,$TacGia,$NXB,$MoTa)
	{
		$sql="Insert into sach(MaLoai,TenSach,Hinh,GiaBan,TacGia,NXB,MoTa) values('$MaLoai','$TenSach','$Hinh','$GiaBan','$TacGia','$NXB','$MoTa')";
		return $this->da->ExecuteQuery($sql);
	}
	
	function UpdateSach($MaSach,$MaLoai,$TenSach,$GiaBan,$MoTa,$Hinh="")
	{
		if($Hinh=="")
		{
			$sql="Update sach set MaLoai=$MaLoai, TenSach='$TenSach', GiaBan=$GiaBan, MoTa = '$MoTa' where MaSach=$MaSach";
		}else
			$sql="Update sach set MaLoai=$MaLoai, TenSach='$TenSach', GiaBan=$GiaBan, MoTa = '$MoTa', Hinh='$Hinh' where MaSach=$MaSach";
		return $this->da->ExecuteQuery($sql);
	}
	
	function DeleteSach($MaSach)
	{
		$sql = "Delete from sach where MaSach=$MaSach";
		return $this->da->ExecuteQuery($sql);
	}
	function GetSach($start,$limit)
	{
		$sql="Select MaSach,TenSach, Hinh, GiaBan, MoTa from sachorder by MaSach desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetSachManage()
	{
		$sql="Select MaSach,TenSach,TenLoai, Hinh, GiaBan,TacGia,NXB from sach p join loaisach c on p.MaLoai=c.MaLoai order by MaSach";
		return $this->da->FetchAll($sql);
	}
	
	function GetSachByCategory($id)
	{
		$sql="Select MaSach,TenSach, Hinh, GiaBan, MoTa from sach where MaLoai=$id";
		return $this->da->FetchAll($sql);
	}
	
	function GetSachByID($id)
	{
		$sql="select MaSach,TenSach, Hinh, TacGia,NXB,GiaBan,MoTa, MaLoai from sach where MaSach=$id";
		return $this->da->Fetch($sql);
	}
	
	function GetProductsOrther($id,$categoryID)
	{
		$sql="Select MaSach,TenSach, Hinh, GiaBan, MoTa from sach where MaSach!=$id and MaLoai=$categoryID limit 0,6";
		return $this->da->FetchAll($sql);
	}
	
	function CountSach()
	{
		$sql="Select MaSach from sach";
		return $this->da->NumRows($sql);
	}
	
	function SearchSach($name)
	{
		$sql = "Select MaSach,TenSach, Hinh, GiaBan, MoTa from sach where TenSach like '%$name%'";
		return $this->da->FetchAll($sql);
	}
	
	function __destruct()
	{
		unset($this->da);
	}
}
?>