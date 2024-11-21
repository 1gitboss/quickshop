<?php

include("../controllers/cart_controller.php");

if (isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);
    $quantity = 1; // Default quantity is 1

    // Get user's IP address (basic version)
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Call controller to add item to the cart
    $result = add_item_ctr($product_id,  $quantity);

    if ($result) {
        // Redirect or return success response
        header("Location: ../view/cart.php?success=1");
    } else {
        // Handle failure
        header("Location: ../view/cart.php?error=1");
    }}
