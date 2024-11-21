<?php
include("../controllers/product_controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $category_id = 1;
    $brand_id = 1;

    if (add_product_ctr($product_name, $description, $price, $category_id, $brand_id)) {
        header("Location: ../view/product_page.php");
        exit();
    } else {
        echo "Error adding product.";
    }
}
?>