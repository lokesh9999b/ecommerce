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
        * Users Data *
    </div>
    <div class="d-flex justify-content-center">
        <div class=" col-md-6  my-5 table-responsive p-5">
            <br>
            <table class="table table-striped table-bordered table-hover ">

                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Registerd At</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($con, $sql);

                    while ($res = mysqli_fetch_assoc($result)) {

                        $id = $res['id'];
                        $email = $res['email_id'];
                        $fname = $res['first_name'];
                        $lname = $res['last_name'];
                        $phone = $res['phone'];
                        $req = $res['registration_time'];
                        echo '<tr>
							                    <td><b>' . $id . '<b></td>
												<td>' . $fname . '</td>
												<td>' . $lname . '</td>
												<td>' . $email . '</td>
                                                <td>' . $phone . '</td>
                                                <td>' . $req . '</td>';
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