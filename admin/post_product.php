<?php
require_once "../config/connect_server.php";
// if(isset($_POST['submit_btn'])){
//     echo "<pre>";
//     if(isset($_POST['featured_product'])){
//         $product_featured=$_POST['featured_product'];
//     }
//     else{
//         $product_featured= 0;
//     }
//     print_r($_POST);
// }

if(isset($_POST['submit_btn'])){
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_insurance=$_POST['product_insurance'];
        $product_promotion=$_POST['product_promotion'];
        $product_category=$_POST['product_category'];
        $product_status=$_POST['product_status'];
        // Tick check
        if(isset($_POST['featured_product'])){
            $product_featured=$_POST['featured_product'];
        }
        else{
            $product_featured= 0;
        }

        $product_detail=$_POST['product_detail'];
        // IMG
        $product_img=$_FILES['product_img']['name'];
        $product_tmp_img=$_FILES['product_img']['tmp_name'];

        $product_insert = "INSERT INTO product(category_id,product_name, product_img, product_price, product_insurance, product_promotion, product_status, product_detail, product_featured) 
                           VALUES ($product_category, '$product_name', '$product_img', $product_price, '$product_insurance', $product_promotion, $product_status, '$product_detail', $product_featured)";
    
        
        mysqli_query($connect,$product_insert);

        move_uploaded_file($product_tmp_img,"../public/upload/".$product_img);
        
        header("Location: admin_product.php");
    }

?>
