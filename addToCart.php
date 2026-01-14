<?php session_start();
ini_set('display_errors', 0); // hide warning
include("connectDB.php");

if (isset($_SESSION['userName']))
	$username = $_SESSION['userName'];
if (isset($_SESSION['guest']))
	$username = $_SESSION['guest'];


$c_id = $_GET['c_id'];
$price = $_GET['price'];
$size = $_GET['size'];
$amount = $_GET['amount'];
$total = $_GET['total'];

$sql = "INSERT INTO cart (username, c_id, price, size, amount, total) VALUES ('$username', '$c_id', '$price', '$size', '$amount', '$total')";
$rs = mysqli_query($conn, $sql);

// echo "Add to Cart Successful";
echo "<script>alert('Add to Cart Successful'); window.location='costume.php'</script>";
exit();
?>