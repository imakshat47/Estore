<?php

include 'include/common.php';
$item_id = $_GET['id'];
$id = $_SESSION['id'];
echo $item_id;
$result = mysqli_query($con, "INSERT INTO cart (User_id, Items_id, status) VALUES('$id', '$item_id', 'Added to cart') ;");

//$result = mysqli_query($con, "Select * from cart");
//$row = mysqli_fetch_array($result);
//print_r($row);
//echo $row['Status'];
//echo $row[2];
header('location: home.php');
?>