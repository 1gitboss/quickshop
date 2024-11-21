<?php

//connect to the user account class
include("../classes/product_class.php");

//sanitize data

// Add product controller
function add_product_ctr($product_name, $description, $price,  $category_id, $brand_id) {
    $product = new Product();
    return $product->addProduct($product_name, $description, $price, $category_id, $brand_id);
}

// Delete product controller
function delete_product_ctr($product_id) {
    $product = new Product();
    return $product->deleteProduct($product_id);
}

// View products controller
function view_products_ctr() {
    $product = new Product();
    return $product->getProducts();
}
?>