<?php
require('../settings/db_class.php'); // Include the database class

// Function to get all orders
function get_all_orders() {
    // Instantiate the database connection class
    $db = new db_connection();

    // Connect to the database
    if (!$db->db_connect()) {
        return false; // Return false if connection fails
    }

    // Write the SELECT query to get all orders
    $sql = "SELECT * FROM orders";

    // Execute the query using the db_query method
    if ($db->db_query($sql)) {
        // Fetch all records
        return $db->db_fetch_all($sql);
    } else {
        return false; // Return false if query fails
    }
}

// Function to display all orders
function display_all_orders() {
    // Call the function to get all orders
    $orders = get_all_orders();

    // Check if orders are retrieved successfully
    if ($orders !== false) {
        if (!empty($orders)) {
            // Display table headers
            echo "<style>
                    table, th, td {
                        font-family: 'Times New Roman', Times, serif;
                        font-size: 22px;
                    }
                  </style>";
            echo "<table>";
            echo "<tr><th>Customer ID</th><th>Invoice #No.</th><th>Date</th><th>Status</th></tr>";

            // Loop through each product and display its details
            foreach ($orders as $order) {
                echo "<tr>";
                echo "<td style='width: 25%;'>" . $order['customer_id'] . "</td>";
                echo "<td style='width: 25%;'>" . $order['invoice_no'] . "</td>";
                echo "<td style='width: 25%;'>" . $order['order_date'] . "</td>";
		echo "<td style='width: 25%;'>" . $order['order_status'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Display message if no orders exist
            echo "<tr><td colspan='4' style='color: crimson; text-align: center; width: 100%; font-family:Times New Roman, san-serif; font-size:22px;'><h1><strong>Empty log</strong></h1></td></tr>";
        }
    } else {
        // Error retrieving orders
        echo "Error retrieving orders.";
    }
}
?>
