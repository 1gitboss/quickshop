<?php
//connect to database class
require("../settings/db_class.php");

class customer_class extends db_connection
{
	public function registerUser($customer_name, $email, $password, $country, $city, $contact_no, $user_role)
    {
        $ndb = new db_connection();
        
        // Escape and sanitize input data
        $customer_name = mysqli_real_escape_string($ndb->db_conn(), $customer_name);
        $email = mysqli_real_escape_string($ndb->db_conn(), $email);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $country = mysqli_real_escape_string($ndb->db_conn(), $country);
		$city = mysqli_real_escape_string($ndb->db_conn(), $city);
        $contact_no = mysqli_real_escape_string($ndb->db_conn(), $contact_no);
        $user_role = mysqli_real_escape_string($ndb->db_conn(), $user_role);

        
        $sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) 
        VALUES ('$customer_name', '$email', '$password', '$country', '$city', '$contact_no', '$user_role')";
        return $this->db_query($sql);
	}

	
    public function loginUser($email, $password)
    {
        $ndb = new db_connection();
        
        // Escape and sanitize input data
        $email = mysqli_real_escape_string($ndb->db_conn(), $email);
        $password = mysqli_real_escape_string($ndb->db_conn(), $password);
        
        // Retrieve user from database based on email
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
        $result = $this->db_fetch_one($sql);
        
        // Check for SQL query execution errors
        if (!$result) {
            // Handle query execution error
            echo "Error: " . mysqli_error($ndb->db_conn());
            return false;
        }
        
        // Check if user exists
        if ($result != null){

            echo "There is a record in db";
            // $user = mysqli_fetch_assoc($result);
            $user = $result;
            // Verify password
            if (password_verify($password, $user['customer_pass'])) {
                // Password is correct, return user data
                return $user;
            } else {
                echo "password is wrong";
                // Password is incorrect
                return false;
            }
        } else {
            echo "Not Found";
            return false;
        }
    }

    public function show_all_users(){
        $ndb = new db_connection();
        $sql = "SELECT * FROM `customer` JOIN branddb.userrole u on u.roleId = customer.user_role";
        $result = $this->db_fetch_all($sql);
        if (!$result) {
            echo "Error: " . mysqli_error($ndb->db_conn());
            return false;

        } else {
            return $result;
        }
    }
    
}


?>


    