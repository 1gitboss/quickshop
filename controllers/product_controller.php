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

function update_product_ctr($product_id, $product_title, $product_price, $product_desc, $product_cat, $product_brand, $product_keywords, $product_image) {
    $product = new Product(); // Assuming a Product class exists for managing product data

    // Call a method in the model class to perform the update
    return $product->update_product($product_id, $product_title, $product_price, $product_desc, $product_cat, $product_brand, $product_keywords, $product_image);
}

function get_single_product_ctr($product_id) {
    $product = new Product(); // Assuming you have a Product class for the model
    return $product->get_single_product($product_id); // Call the model function
}


?>