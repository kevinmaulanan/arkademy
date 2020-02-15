<?php 
 
include 'koneksi.php';
$id = $_GET['id'];
$cashier = $_POST['cashier'];
$product = $_POST['product'];
$category = $_POST['category'];
$price = $_POST['price'];
 
	

    $sql = "update cashier set cashier='$cashier',price='$price' where id='$id'";
    mysqli_query($kon,$sql);

    $sql = "update product set product='$product' where id='$id'";
    mysqli_query($kon,$sql);

    $sql = "update category set category='$category' where id='$id'";
    mysqli_query($kon,$sql);

header("location: ../index.php");
?>