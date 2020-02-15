<?php
include 'koneksi.php';

$cashier = $_POST['cashier'];
$product = $_POST['product'];
$category = $_POST['category'];
$price = $_POST['price'];


 
 //menyimpan ke table category
 $sql1 = "insert into category (category) values ('$category')";
 mysqli_query($kon,$sql1);

 //mencari id category
 $sql_category = "select max(id) as last_id from category";
 $hasil_category = mysqli_query($kon,$sql_category);
 $objek_category = mysqli_fetch_object($hasil_category);
 $id_category = $objek_category->last_id;

//menyimpan ke table cashier
 $sql2 = "insert into cashier (id,cashier) values ('$id_category','$cashier')";
 mysqli_query($kon,$sql2);



 //menyimpan data ke table product
 $sql_product= "INSERT into product (id,name,price,id_category,id_cashier) values ('$id_category','$product','$price','$id_category','$id_category')";
mysqli_query($kon,$sql_product);

 header("location: ../index.php");


?>