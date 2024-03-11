<?php
require("includes/common.php");
include 'vendor/autoload.php';


use \Firebase\JWT\JWT;

session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $token = $_SESSION['jwt_token'];
    $secret_key = 'Lokesh Bommagani';
    $user_id = $_SESSION['user_id'];
    echo "$user_id";

    $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
