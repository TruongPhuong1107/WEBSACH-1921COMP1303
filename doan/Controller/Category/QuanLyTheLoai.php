<?php
include_once("Model/Category.php");
$Product= new Category();
$ret=$Product->GetCategories();
include_once("View/Category/QuanLyTheLoai.php");
?>