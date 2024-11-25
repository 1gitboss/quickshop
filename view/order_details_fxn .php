<?php
require('../settings/db_class.php'); // Include the database class

// Function to get all order_details
function get_all_order_details() {
    // Instantiate the database connection class
    $db = new db_connection();

    // Connect to the database
    if (!$db->db_connect()) {
        return false; // Return false if connection fails
    }

    // Write the SELECT query to get all order_details
    $sql = "SELECT * FROM orderdetails";

    // Execute the query using the db_query method
    if ($db->db_query($sql)) {
        // Fetch all records
        return $db->db_fetch_all($sql);
    } else {
        return false; // Return false if query fails
    }
}

// Function to display all order_details
function display_all_order_details() {
    // Call the function to get all order_details
    $order_details = get_all_order_details();

    // Check if order_details are retrieved successfully
    if ($order_details !== false) {
        if (!empty($order_details)) {
            // Display table headers
            echo "<style>
                    table, th, td {
                        font-family: 'Times New Roman', Times, serif;
                        font-size: 22px;
                    }
                  </style>";
            echo "<table>";
            echo "<tr><th>Order ID</th><th>Product ID</th><th>Product Quantity</th></tr>";

            // Loop through each product and display its details
            foreach ($order_details as $order_detail) {
                echo "<tr>";
                echo "<td style='width: 25%;'>" . $order_detail['order_id'] . "</td>";
                echo "<td style='width: 25%;'>" . $order_detail['product_id'] . "</td>";
                echo "<td style='width: 25%;'>" . $order_detail['qty'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Display message if no order_details exist
            echo "<tr><td colspan='3' style='color: crimson; text-align: center; width: 75%; font-family:Times New Roman, san-serif; font-size:22px;'><h1><strong>Empty log</strong></h1></td></tr>";
        }
    } else {
        // Error retrieving order_details
        echo "Error retrieving orderdetails.";
    }
}
?>
