<?php
//connect to database class
require("../settings/db_class.php");

/**
 *General class to handle all functions
 */
/**
 *@author David Sampah
 *
 */

class cart_class extends db_connection
{
    public function add_to_cart($productId,$ip_add,$category_id,$qty)
    {
        $ndb = new db_connection();


        $sql = "INSERT INTO `cart`(`p_id`,`ip_add`,`c_id`,`qty`) VALUES ('$productId','$ip_add','$category_id','$qty')";
        return $this->db_query($sql);
    }
    //--INSERT--//


    //--SELECT--//
    public function get_items($ip_add) {
        $sql = "SELECT c.*, p.product_title, p.product_price, p.product_image 
            FROM cart c 
            JOIN products p ON c.p_id = p.product_id 
            WHERE c.ip_add = '$ip_add'";
        return $this->db_fetch_all($sql); // Fetch all rows instead of just one
    }




    //--UPDATE--//
    public function update_quantity($productId, $ipAddress, $quantity) {
        $ipAddress = mysqli_real_escape_string($this->db_conn(), $ipAddress);

        $sql= "UPDATE cart SET qty = '$quantity' WHERE p_id = '$productId' AND ip_add = '$ipAddress'";

        return $this->db_query_escape_string($sql);
    }


    //--DELETE--//
    public function delete_item($productId, $ipAddress)
    {
        // Escape inputs to prevent SQL injection
        $productId = mysqli_real_escape_string($this->db_conn(), $productId);
        $ipAddress = mysqli_real_escape_string($this->db_conn(), $ipAddress);

        // Construct the SQL query
        $sql = "DELETE FROM `cart` WHERE p_id = '$productId' AND ip_add = '$ipAddress'";

        // Execute the query
        return $this->db_query_escape_string($sql);
    }

    public function calculate_total($ipAddress)
    {
        // Escape the IP address to prevent SQL injection
        $ipAddress = mysqli_real_escape_string($this->db_conn(), $ipAddress);

        // Construct the SQL query
        $sql = "SELECT SUM(p.product_price * c.qty) AS total 
            FROM cart c 
            JOIN products p ON c.p_id = p.product_id 
            WHERE c.ip_add = '$ipAddress'";

        // Execute the query and fetch the result
        $result = $this->db_fetch_one($sql);

        // Return the total amount (if available)
        return $result ? $result['total'] : 0;

}


}

?>