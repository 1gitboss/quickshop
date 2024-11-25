<?php
include("../controllers/product_controller.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_keywords = $_POST['product_keywords'];
    $product_image = null; // Default value for image

    // Handle the image upload if provided
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = "../images/"; // Folder for product images
        $product_image = basename($_FILES['product_image']['name']);
        $target_file = $upload_dir . $product_image;

        if (!move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
            echo "Failed to upload image.";
            exit();
        }
    }

    // Call the controller function to update the product
    $result = update_product_ctr($product_id, $product_title, $product_price, $product_desc, $product_cat, $product_brand, $product_keywords, $product_image);

    if ($result) {
        // Redirect back to the product management page
        header("Location: ../view/product_page.php");
        exit();
    } else {
        echo "Failed to update product!";
    }
} else {
    echo "Invalid request!";
}
?>
