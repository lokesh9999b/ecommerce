<?php
include "common.php";
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $query = "DELETE FROM `products`  WHERE id = '$id'";
    $stmt = $con->prepare($query);
    if ($stmt) {
        if ($stmt->execute()) {

            echo "<script>alert('Product Deleted Successfully')</script>";
            echo " <script>document.location='watch.php'</script>";

        } else {
            echo "Product is cant be deleted because some one is ordered the product ";

        }    
    }
}
?>