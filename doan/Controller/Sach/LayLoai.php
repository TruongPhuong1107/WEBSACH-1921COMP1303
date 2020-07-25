<?php
include_once("Model/Category.php");
$rs= new Category();
$result=$rs->GetCategories();
include_once("View/Category/ShowCategories.php");
 ?>