<?php
include("../controllers/product_controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the product ID from the form
    $product_id = $_POST['product_id'];

    // Call the delete function from the controller
    if (delete_product_ctr($product_id)) {
        // Redirect back to the product page after deletion
        header("Location: ../view/product_page.php");
        exit();
    } else {
        echo "Error deleting product.";
    }
}
?>