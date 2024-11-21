<?php

include("../controllers/cart_controller.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    update_quantity_ctr($productId, $quantity);
    header("Location: ../view/cart.php");
}
