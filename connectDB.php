<?php
$hostName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "clothdb";

$conn = mysqli_connect($hostName, $userName, $passWord, $dbName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


//if (mysqli_connect_error()) {
	//echo "Connect falied : " . mysqli_connect_error();
//} else {
	//echo "Connect Successfully.";
//}
?>