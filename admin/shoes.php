<?php
require "common.php";
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenKart | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include 'header_menu.php';
    ?>
    <div class="text-center pt-4 h3">
        * Shoes Data *
    </div>
    <div class="d-flex justify-content-center">
        <div class=" col-md-6  my-5 table-responsive p-5">
            <a name="add" href="shoe_add.php" class="btn btn-success" role="button">Add Product</a>
            <br>
            <table class="table table-striped table-bordered table-hover ">

                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Picture</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Edit Details</th>
                        <th>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `products` WHERE category = 'c03'";
                    $result = mysqli_query($con, $sql);

                    while ($res = mysqli_fetch_assoc($result)) {

                        $id = $res['id'];
                        $name = $res['name'];
                        $picture = $res['picture'];

                        $price = $res['price'];


                        echo '<tr>
							                    <td><b>' . $id . '<b></td>
												<td><img src="../' . $picture . '" width="50" height="50"></td>
												<td>' . $name . '</td>
												<td>' . $price . '</td>
                                                <td><a name="upate" href="watch_update.php?updateid=' . $id . '" class="btn btn-success" role="button">Update</a></td>
									
                                                <td><a name="delete" href="watch_delete.php?updateid=' . $id . '" class="btn btn-danger" role="button">Delete</a></td>';
                    }

                    ?>
                </tbody>

                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <!--footer -->
    <?php include 'footer.php' ?>
    <!--footer end-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {

        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

    });
</script>
<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>