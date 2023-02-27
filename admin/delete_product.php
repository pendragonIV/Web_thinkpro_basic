<?php
require_once "../config/connect_server.php";

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    $delete_product_query = "DELETE FROM product WHERE product_id = $product_id";
    mysqli_query($connect,$delete_product_query);

    header("Location: admin_product.php");
}
else{
    header("Location: admin_product.php");
}
?>