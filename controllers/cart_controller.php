<?php

//connect to the user account class
include("../classes/cart_class.php");

//sanitize data

// Add product controller
function add_item_ctr($productId, $qty) {
    $cart = new cart_class();
    $ip_add=$_SERVER['REMOTE_ADDR'];
    $category_id=1;
    return $cart->add_to_cart($productId,$ip_add,$category_id,$qty);
}

// Delete item controller
function delete_item_ctr($product_id) {
    $cart = new cart_class();
    $ip_add=$_SERVER['REMOTE_ADDR'];
    return $cart->delete_item($product_id,$ip_add);
}

// View products controller
function view_items_ctr()
{
    $cart = new cart_class();
    $ip_add = $_SERVER['REMOTE_ADDR'];
    return $cart->get_items($ip_add);
}

function calculate_total_ctr() {

    $cart = new cart_class();
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    return $cart->calculate_total($ipAddress);
}

function update_quantity_ctr($productId, $quantity) {

    $cart = new cart_class();
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    return $cart->update_quantity($productId, $ipAddress, $quantity);
}

?>