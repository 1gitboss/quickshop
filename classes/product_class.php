<?php
//connect to database class
require("../settings/db_class.php");

/**
 *General class to handle all functions
 */
/**
 *@author David Sampah
 *
 */


class Product extends db_connection {

    // Add a new product/service
    public function addProduct($product_name, $description, $price, $category_id, $brand_id) {
        // Sanitize inputs
        $product_name = mysqli_real_escape_string($this->db_conn(), $product_name);
        $description = mysqli_real_escape_string($this->db_conn(), $description);
        $price = (float)$price;
//        $stock_quantity = (int)$stock_quantity;
        $category_id = (int)$category_id;
        $brand_id = (int)$brand_id;

        $sql = "INSERT INTO `products` (`product_title`, `product_desc`, `product_price`, `product_cat`, `product_brand`) 
                VALUES ('$product_name','$description', '$price', '$category_id', '$brand_id')";

        return $this->db_query($sql);
    }

    // Delete a product/service by id
    public function deleteProduct($id) {
        $id = (int)$id;
        $sql = "DELETE FROM `products` WHERE `product_id` = '$id'";
        return $this->db_query($sql);
    }

    // Get all products/services
    public function getProducts() {
        $sql = "SELECT p.*, b.brand_name, c.cat_name 
                FROM `products` p 
                LEFT JOIN `brands` b ON p.product_brand = b.brand_id 
                LEFT JOIN `categories` c ON p.product_cat = c.cat_id";
        return $this->db_fetch_all($sql);
    }
}
?>