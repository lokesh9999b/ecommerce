<?php
require("common.php");
session_start();




if (isset($_POST['submit'])) {
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    $image = $_FILES['profile']['name'];
    $tmp_image = $_FILES['profile']['tmp_name'];
    $folder = "../images/" . $image;
    move_uploaded_file($tmp_image, $folder);
    if ($_FILES['profile']['name']) {
        // New image uploaded, process the upload and update
        $image = $_FILES['profile']['name'];
        $tmp_image = $_FILES['profile']['tmp_name'];
        $folder = "images/" . $image;
        move_uploaded_file($tmp_image, $folder);
    } 



    $query = "INSERT INTO `products`(`id`, `name`, `price`, `picture`, `category`) VALUES ('$id','$name','$price','$folder','c03')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Updated successfully')</script>";

        echo "<script>document.location.href='watch.php'</script>";
    } else {
        echo "<script>alert('Data NOT updated')</script>";
        echo "<script>document.location.href='watch.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenKart | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">
</head>

<body style="overflow-x:hidden; padding-bottom:100px;">
    <?php
    include 'header_menu.php';
    ?>
    <div>
        <br>
        <br>
        <br>
        <div class="text-center pt-4 h3">
        * Add Product *
    </div>

        <div class="container pb-3">
        </div>

        <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

            <form class="col-md-12" method="POST" enctype="multipart/form-data">
                <h3 class="text-warning pt-3 title mx-auto">Add Product </h3>
                
                   
                <div class="form-group">
                    <label for="exampleFormControlInput1">PRODUCT ID</label>
                    <input type="text" class="form-control" name="id" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">PRODUCT NAME</label>
                    <input type="text" class="form-control"  name="pname">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">PRICE</label>
                    <input type="text" class="form-control"  name="price">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Product Picture</label>
                    <input class="form-control" type="file" id="profile"  name="profile">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>


            </form>
        </div>


    </div>
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
    echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>