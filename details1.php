<?php
require("includes/common.php");
session_start();

if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];



    // Fetch user details from the database based on the email
    $sql = "SELECT * FROM users WHERE email_id = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user_details = mysqli_fetch_assoc($result);
        $first_name = $user_details['first_name'];
        $last_name = $user_details['last_name'];
        $email = $user_details['email_id'];
        $mobile = $user_details['phone'];
    } else {
        // Handle error if user details are not found
        echo "User details not found.";
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
    <link rel="stylesheet" href="style.css">
</head>

<body style="overflow-x:hidden; padding-bottom:100px;">
    <?php
    include 'includes/header_menu.php';
    ?>
    <div>
        <br>
        <br>
        <br>


        <div class="container pb-3">
        </div>
        <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

            <form class="col-md-12" action="details1.php" method="GET">
                <h3 class="text-warning pt-3 title mx-auto">User Details</h3>
                <div class="form-group">
                    <label for="exampleFormControlInput1">FIRST NAME</label>
                    <input type="text" class="form-control" value="<?php echo $first_name ?>" name="email" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">LAST NAME</label>
                    <input type="text" class="form-control" value="<?php echo $last_name ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" class="form-control" value="<?php echo $email ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">MOBILE</label>
                    <input type="text" class="form-control" value="<?php echo $mobile ?>" readonly>
                </div>


            </form>
        </div>


    </div>
    <!--footer -->
    <?php include 'includes/footer.php' ?>
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