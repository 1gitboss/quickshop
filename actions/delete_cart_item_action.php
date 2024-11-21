<?php

require_once "../controllers/cart_controller.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    delete_item_ctr($productId);
    header("Location: ../view/cart.php");
}
