<?php

// $dbsname = "localhost";
// $dbUName = "root";
// $dbPwd = "";
// $dbName = "StudentProfile";

$dbsname = "localhost";
$dbUName = "id17093579_root";
$dbPwd = "98#{I<6bXEq_ag>t";
$dbName = "id17093579_studentprofile";


$connect = new mysqli($dbsname, $dbUName, $dbPwd, $dbName);

$sql = "select * from profile";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<div><h1>ALL STUDENT REGISTERED</h1></div>";
  while($row = $result->fetch_assoc()) {
    
    echo "<div 
    style='
    padding:10px;
    width:40%;
    border-radius:5px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    '>";
    echo "Fullname: " . $row["fullname"]. "<br>";
    echo "Section: " . $row["section"]. "<br>";
    echo "Strand: " . $row["strand"]. "<br>";
    echo "</div>";
    echo "<br><br>";
  }
} else {
  echo "0 results";
}
