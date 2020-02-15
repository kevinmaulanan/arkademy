<?php
    include 'config/koneksi.php';


    //tampil data
    $sql1 = "SELECT Product.id,Cashier.cashier, Product.name, Category.category, Product.price FROM product INNER JOIN Cashier ON Product.id_cashier=Cashier.id INNER JOIN Category ON Product.id_category=Category.id;";
    $query1 = mysqli_query($kon,$sql1);

    //add data
    $sql_product = "SELECT *from product";
    $sql_cashier = "SELECT *from cashier";
    $sql_category = "SELECT *from category";
   
    $query1_product = mysqli_query($kon,$sql_product);
    $query2_product = mysqli_query($kon,$sql_product);
    $query1_cashier = mysqli_query($kon,$sql_cashier);
    $query1_category = mysqli_query($kon,$sql_category);


    //update_data
    $query3_product = mysqli_query($kon,$sql_product);
    $query4_product = mysqli_query($kon,$sql_product);
    $query3_cashier = mysqli_query($kon,$sql_cashier);
    $query3_category = mysqli_query($kon,$sql_category);


    $count="0";
?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Arkademy Bootcamp</title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <img src="img/logo.png" class="d-inline-block align-top imgheader" alt="Logo Arkademy">
            <a class="navbar-brand">

            </a>
            <button class="btn btn-add my-2 my-sm-0 tampilModalAdd" data-toggle="modal" data-target="#addModal">ADD</button>
        </nav>
    </div>

    <main>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">
                            <center>No
                        </th>
                        <th scope="col">
                            <center>Cashier
                        </th>
                        <th scope="col" width="30%">
                            <center>Product
                        </th>
                        <th scope="col" width="20%">
                            <center>Categoty
                        </th>
                        <th scope="col" width="15%">
                            <center>Price
                        </th>
                        <th scope="col" width="15%">
                            <center>Action
                        </th>
                    </tr>
                </thead>
               <tbody>
                    <?php while($data = mysqli_fetch_object($query1)) { $count++?>
                        <tr>
                            <th scope="row">
                                <center><?php echo $count;?></center>
                            </th>
                            <th scope="row">
                                <center><?php echo $data->cashier;?></center>
                            </th>
                             <th scope="row">
                                <center><?php echo $data->name;?></center>
                            </td>
                             <th scope="row">
                                <center><?php echo $data->category;?></center>
                            </td>
                             <th scope="row">
                                <center><?php echo $data->price;?></center>
                            </td>
                             <th scope="row">
                                <center>
                                    <a href="config/delete.php?id=<?php echo $data->id?>"><img src="foto/hapus.png" class="delete" alt="Delete" ></a>
                                    <a href="config/proses_update.php?id=<?php echo $data->id?>" data-toggle="modal" data-target="#addModal1" class="tampilModalUbah"><img src="foto/edit.png" class="edit" alt="Edit" >
                                    
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>


    <div class="modal fade" tabindex="-1" id="addModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="config/proses_tambahdata.php" method="post">
                        <input type="hidden" name="id" id="id">
                        <select class="form-control form-control-lg" name="cashier" id="id" required>
                            <option value="" disabled selected>Cashier ...</option>
                            <?php while ($data = mysqli_fetch_object($query1_cashier)) { ?>
                                <option value="<?php echo $data->cashier?>"> <?php echo $data->cashier?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="product" required>
                            <option value="" disabled selected>Product ...</option>
                            <?php while ($data = mysqli_fetch_object($query1_product)) { ?>
                                <option value="<?php echo $data->name?>"> <?php echo $data->name?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="category" required>
                            <option value="" disabled selected>Category ...</option>
                            <?php while ($data = mysqli_fetch_object($query1_category)) { ?>
                                <option value="<?php echo $data->category?>"> <?php echo $data->category?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="price" required>
                            <option value="" disabled selected>Price ...</option>
                            <?php while ($data = mysqli_fetch_object($query2_product)) { ?>
                                <option value="<?php echo $data->price?>"> <?php echo $data->price?> </option>
                            <?php } ?>
                        </select>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" style="color:white" class="addd">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="modal fade" tabindex="-1" id="addModal1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">UPDATE DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="config/proses_update.php" method="post">
                        <input type="hidden" name="id" id="id">
                        <select class="form-control form-control-lg" name="cashier" id="id" required>
                            <option value="" disabled selected>Cashier ...</option>
                            <?php while ($data = mysqli_fetch_object($query3_cashier)) { ?>
                                <option value="<?php echo $data->cashier?>"> <?php echo $data->cashier?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="product" required>
                            <option value="" disabled selected>Product ...</option>
                            <?php while ($data = mysqli_fetch_object($query3_product)) { ?>
                                <option value="<?php echo $data->name?>"> <?php echo $data->name?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="category" required>
                            <option value="" disabled selected>Category ...</option>
                            <?php while ($data = mysqli_fetch_object($query3_category)) { ?>
                                <option value="<?php echo $data->category?>"> <?php echo $data->category?> </option>
                            <?php } ?>
                        </select>

                        <br>
                        <select class="form-control form-control-lg" name="price" required>
                            <option value="" disabled selected>Price ...</option>
                            <?php while ($data = mysqli_fetch_object($query4_product)) { ?>
                                <option value="<?php echo $data->price?>"> <?php echo $data->price?> </option>
                            <?php } ?>
                        </select>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" style="color:white" class="addd">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>