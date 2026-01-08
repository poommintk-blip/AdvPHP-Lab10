<?php
$hostName = "127.0.0.1";
$userName = "root";
$passWord = "";
$dbName = "clothdb";

$conn = mysqli_connect($hostName, $userName, $passWord, $dbName);
if (mysqli_connect_error()) {
	echo "Connect falied : " . mysqli_connect_error();
} else {
	//echo "Connect Successfully.";
}
?>