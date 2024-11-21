<?php
include("../controllers/brand_controller.php");
include ("sidebar.php");

// Fetch all brands
$brands = view_brands_ctr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/brand_page.css">

    <title>Manage Brands</title>
</head>
<body>

<div class="content">
    <h1>Manage Brands</h1>
    <button id="addBrandBtn">Add Brand</button>

    <table id="brandTable">
        <thead>
        <tr>
            <th>Brand Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($brands)) {
            foreach ($brands as $brand) {
                echo "<tr>";
                echo "<td>" . $brand['brand_name'] . "</td>";
                echo "<td>
                    <form method='post' action='../actions/delete_brand_action.php'>
                        <input type='hidden' name='brand_id' value='" . $brand['brand_id'] . "' />
                        <button type='submit'>Delete</button>
                    </form>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No brands available</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <!-- Form for adding a brand -->
    <div id="brandModal">
        <div id="brandModalInner">
            <h2>Add Brand</h2>
            <form action="../actions/add_brand_action.php" method="post" id="brandForm">
                <label for="brandName">Brand Name:</label><br>
                <input type="text" id="brandName" name="name" required><br><br>
                <button type="submit">Submit</button>
            </form>
            <button id="closeModalBtn">Close</button>
        </div>
    </div>

</div>

<script src="../js/brand.js" ></script>
</body>
</html>
