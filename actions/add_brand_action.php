<?php

include("../controllers/brand_controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize input data
    $name = $_POST['name'];
}

if (add_brand_ctr($name)) {
    // Redirection success message
    header("Location: ../view/manage_brand.php");
    exit();
} else {
    // Handle failure (e.g., show error message)
    echo "Error adding brand";
}
