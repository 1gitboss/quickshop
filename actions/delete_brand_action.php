<?php
include("../controllers/brand_controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the brand ID from the form
    $brand_id = $_POST['brand_id'];

    // Call the delete function from the controller
    if (delete_brand_ctr($brand_id)) {
        // Redirect back to the brand page after deletion
        header("Location: ../view/manage_brand.php");
        exit();
    } else {
        echo "Error deleting brand.";
    }
}
?>
