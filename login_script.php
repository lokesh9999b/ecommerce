<?php
require("includes/common.php");
session_start();

include 'vendor/autoload.php';

use \Firebase\JWT\JWT;

$email = $_POST['lemail'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['lpassword'];
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);
echo "$password";
$query = "SELECT id, email_id, password from users where `email_id` ='$email' and  `password`='$password'";
echo "$email";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num == 0) {
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl=' . $m);
} else {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email_id'];

    $_SESSION['user_id'] = $row['id'];
    $user_id = $row['id'];
    $email_id = $row['email_id'];

    // JWT TOKEN
    $payload = [
        'iss' => "localhost",
        'aud' => 'localhost',
        'exp' => time() + 1000, //10 min
        $data = [
            "user_id" => $user_id,
            "email_id" => $email_id,
        ],
    ];
    $secret_key = "Lokesh Bommagani";
    $token = JWT::encode($payload, $secret_key, 'HS256');

    $_SESSION['jwt_token'] = $token;


    header('location:products.php');
}
