<?php

$dbsname = "localhost";
$dbUName = "id17093579_root";
$dbPwd = "98#{I<6bXEq_ag>t";
$dbName = "id17093579_studentprofile";


$connect = new mysqli($dbsname, $dbUName, $dbPwd, $dbName);

if(!$connect){
  echo "Error Connecting the database ";
}else{
  echo "Connected<br>";
}

$fullname = $_GET['fullname'];
$section = $_GET['section'];
$strand = $_GET['strand'];

$query = "insert into profile(fullname,section,strand) value("."'".$fullname."'".","."'".$section."'".","."'".$strand."'".")";

if($connect->query($query) === TRUE){
  echo "Successfully Added";
}else{
  echo "Error";
}

