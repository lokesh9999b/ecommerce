<?php
require("common.php");
session_start();

include '../vendor/autoload.php';

use \Firebase\JWT\JWT;

$name = $_POST['lname'];
$name = mysqli_real_escape_string($con, $name);

$password = $_POST['pass'];
$password = mysqli_real_escape_string($con, $password);
$password = $password;

$query = "SELECT id, name, password from admin where `name` ='$name' and  `password`='$password'";

$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num == 0) {
    $m = "Please enter correct User name and Password";
    header('location: index.php?errorl=' . $m);
} else {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['name'];

    // $_SESSION['user_id'] = $row['id'];
    // $user_id = $row['id'];
    // $email_id = $row['email_id'];

    // JWT TOKEN
    $payload = [
        'iss' => "localhost",
        'aud' => 'localhost',
        'exp' => time() + 1000, //10 min
        $data = [
            "name" => $name,
            "password" => $password,
        ],
    ];
    $secret_key = "Lokesh Bommagani";
    $token = JWT::encode($payload, $secret_key, 'HS256');

    $_SESSION['jwt_token'] = $token;


    header('location:products.php');
}
