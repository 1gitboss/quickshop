<?php
include("../controllers/product_controller.php");

// Fetch all brands
$products = view_products_ctr();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product_page.css">

    <title>Manage Products</title>
</head>
<body>

<h1>Manage Products</h1>
<button id="addProductBtn">Add Product</button>

<table id="productTable">
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($products)) {
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['product_title'] . "</td>";
            echo "<td>" . $product['product_desc'] . "</td>";
            echo "<td>" . $product['product_price'] . "</td>";

            echo "<td>" . $product['brand_name'] . "</td>";  // Joining the brand table
            echo "<td>" . $product['cat_name'] . "</td>";  // Joining the category table
            echo "<td>
                    <form method='post' action='../actions/delete_product_action.php'>
                        <input type='hidden' name='product_id' value='" . $product['product_id'] . "' />
                        <button type='submit'>Delete</button>
                    </form>
                </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No products available</td></tr>";
    }
    ?>
    </tbody>
</table>

<!-- Form for adding a product -->
<div id="productModal">
    <div id="productModalInner">
        <h2>Add Product</h2>
        <form action="../actions/add_product_action.php" method="post" id="brandForm">
            <label for="productName">Product Name:</label><br>
            <input type="text" id="productName" name="product_name" required><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" required></textarea><br><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" step="0.01" required><br><br>


            <button type="submit">Submit</button>
        </form>
        <button id="closeModalBtn">Close</button>
    </div>
</div>


<script src="../js/product.js"></script>
</body>
</html>
