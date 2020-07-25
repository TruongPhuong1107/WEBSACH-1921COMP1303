<?php
include_once("DataProvider.php");
class User
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertUser($TenDN,$MatKhau,$HoTen,$DiaChi,$DienThoai,$Email)
	{
		$sql="Insert into khachhang(TenDN,MatKhau,HoTen,DiaChi,DienThoai,Email) values('$TenDN','$MatKhau','$HoTen','$DiaChi',$DienThoai,'$Email')";		
		return $this->da->ExecuteQuery($sql);
	}
	
	function UpdateUser($TenDN,$MatKhau,$HoTen,$DiaChi,$DienThoai,$Email,$MaKH)
	{
		
			$sql="Update khachhang set TenDN='$TenDN',MatKhau='$MatKhau',HoTen='$HoTen',DiaChi='$DiaChi',DienThoai=$DienThoai,Email='$Email',MaKH=$MaKH";
		return $this->da->ExecuteQuery($sql);
	}
	
	function DeleteUser($MaKH)
	{
		$sql = "Delete from khachhang where MaKH=$MaKH";
		return $this->da->ExecuteQuery($sql);
	}
	function GetUser($start,$limit)
	{
		$sql="Select TenDN,MatKhau,HoTen,DiaChi,DienThoai,Email,MaKH from sachorder by MaKH desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetUsers()
	{
		$sql="Select TenDN,MatKhau,HoTen,DiaChi,DienThoai,Email,MaKH from khachhang";
		return $this->da->FetchAll($sql);
	}
	function GetUserLogin($TenDN,$MK)
	{
		$sql="Select  HoTen,DiaChi,DienThoai,Email,MaKH from khachhang where TenDN='$TenDN' and MatKhau='$MK' ";
		return $this->da->Fetch($sql);
	}
	function GetUserByID($id)
	{
		$sql="select TenDN,MatKhau,HoTen,DiaChi,DienThoai,Email,MaKH from khachhang where MaKH=$id";
		return $this->da->Fetch($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>