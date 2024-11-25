<?php
include("../controllers/product_controller.php");

// Get product_id from the URL
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Fetch product details
    $product = get_single_product_ctr($product_id); // Ensure you have a function to fetch product by ID

    if (!$product) {
        echo "Product not found!";
        exit();
    }
} else {
    echo "No product ID provided!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
<h1>Update Product</h1>
<form action="update_product_action.php" method="post" enctype="multipart/form-data">
    <!-- Include product_id as a hidden field -->
    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">

    <label for="product_title">Product Name:</label><br>
    <input type="text" id="product_title" name="product_title" value="<?php echo $product['product_title']; ?>" required><br><br>

    <label for="product_desc">Description:</label><br>
    <textarea id="product_desc" name="product_desc" rows="4" required><?php echo $product['product_desc']; ?></textarea><br><br>

    <label for="product_price">Price:</label><br>
    <input type="number" id="product_price" name="product_price" step="0.01" value="<?php echo $product['product_price']; ?>" required><br><br>

    <label for="product_cat">Category:</label><br>
    <input type="number" id="product_cat" name="product_cat" value="<?php echo $product['product_cat']; ?>" required><br><br>

    <label for="product_brand">Brand:</label><br>
    <input type="number" id="product_brand" name="product_brand" value="<?php echo $product['product_brand']; ?>" required><br><br>

    <label for="product_keywords">Keywords:</label><br>
    <input type="text" id="product_keywords" name="product_keywords" value="<?php echo $product['product_keywords']; ?>"><br><br>

    <label for="product_image">Product Image:</label><br>
    <input type="file" id="product_image" name="product_image"><br><br>
    <p>Current Image: <?php echo $product['product_image']; ?></p>

    <button type="submit">Update Product</button>
</form>
</body>
</html>
