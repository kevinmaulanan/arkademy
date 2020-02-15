<?php
include 'koneksi.php';
$id = $_GET['id']; 

    $sql = "delete from product where id='$id'";
    mysqli_query($kon,$sql);

    $sql = "delete from category where id='$id'";
    mysqli_query($kon,$sql);

    $sql = "delete from cashier where id='$id'";
    mysqli_query($kon,$sql);

header("location: ../index.php")

?>