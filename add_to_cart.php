<?php
session_start();
//phpinfo();
$dbServername = "sehatjaanch.com:3306";
$dbUsername = "EliteShoppy";
$dbPassword = "pass@123";
$dbName = "EliteShoppy";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn)
{
  die('Could not connect: ' . mysql_error());
}

echo add_to_cart($conn);

function add_to_cart($conn){	
	$product_id = mysqli_real_escape_string($conn, $_POST['product_id']);	
	$uid = mysqli_real_escape_string($conn,$_POST['user_id']);
	$quantity = mysqli_real_escape_string($conn,$_POST['qty']);
	$sql = "SELECT * FROM cart WHERE cart.user_id='$uid' AND cart.product_id='$product_id';";
	$result=mysqli_query($conn, $sql);
	$item_count = mysqli_num_rows($result);
	if($item_count==1)
	{
		if($quantity==-1)
		{
			$row = mysqli_fetch_assoc($result);
			$qty=$row['qty']+1;
			$sql="UPDATE cart SET qty='$qty' WHERE user_id='$uid' AND product_id='$product_id'";
			$result=mysqli_query($conn, $sql);
		}
		else
		{
			$qty=$quantity;
			$sql="UPDATE cart SET qty='$qty' WHERE user_id='$uid' AND product_id='$product_id'";
			$result=mysqli_query($conn, $sql);
		}
	}
	else
	{
		$qty="1";
		$sql="INSERT INTO cart (user_id, product_id ,qty) VALUES ('$uid','$product_id','$qty')";
		$result=mysqli_query($conn, $sql);
		echo mysqli_error($conn);
	}
	$sql = "SELECT * FROM cart WHERE cart.user_id='$uid';";
	$result=mysqli_query($conn, $sql);
	$item_count = mysqli_num_rows($result);
	return $item_count;
} 

?>