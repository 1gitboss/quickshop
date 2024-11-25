<?php
require('../settings/db_class.php'); // Include the database class

// Function to get all products
function get_all_products() {
    // Instantiate the database connection class
    $db = new db_connection();

    // Connect to the database
    if (!$db->db_connect()) {
        return false; // Return false if connection fails
    }

    // Write the SELECT query to get all products
    $sql = "SELECT * FROM products";

    // Execute the query using the db_query method
    if ($db->db_query($sql)) {
        // Fetch all records
        return $db->db_fetch_all($sql);
    } else {
        return false; // Return false if query fails
    }
}

// Function to display all products
function display_all_products() {
    // Call the function to get all products
    $products = get_all_products();

    // Check if products are retrieved successfully
    if ($products !== false) {
        if (!empty($products)) {
            // Display table headers
            echo "<style>
                    table, th, td {
                        font-family: 'Times New Roman', Times, serif;
                        font-size: 22px;
                    }
                  </style>";
            echo "<table>";
            echo "<tr><th>Title</th><th>Price</th><th>Description</th><th>Update</th></tr>";

            // Loop through each product and display its details
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td style='width: 20%;'>" . $product['product_title'] . "</td>";
                echo "<td style='width: 10%;'>" . $product['product_price'] . "</td>";
                echo "<td style='width: 60%;'>" . $product['product_desc'] . "</td>";

		// Add edit  icons or links here
                echo "<td style='width: 10%; border: 4px solid #dddddd; text-align: center; vertical-align: middle;'>";
                echo "<a href='#" . $product['product_id'] . "' class='edit-link' style='color:#00cc00;'><i class='fas fa-edit' title='Edit'></i></a>&nbsp;&nbsp;&nbsp;";
                echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Display message if no products exist
            echo "<tr><td colspan='4' style='color: crimson; text-align: center; width: 100%; font-family:Times New Roman, san-serif; font-size:22px;'><strong>Empty log</strong></td></tr>";
        }
    } else {
        // Error retrieving products
        echo "Error retrieving products.";
    }
}
?>
