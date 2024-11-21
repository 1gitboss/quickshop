<?php

require("../controllers/customer_controller.php");


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set and not empty
    if (isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        // Get input values
        $email = $_POST["email"];
        $password = $_POST["password"];

        // AtteXmpt to login user
        // $generalClass = new general_controller();
        $user = loginUser_ctr($email, $password);

        // Check if login was successful
        if ($user != null ) {
            // Start session
            session_start();

            // Store user data in session
            $_SESSION['user_id'] = $user['customer_id'];
            $_SESSION['user_email'] = $user['customer_email'];
            $_SESSION['user_name'] = $user['customer_name'];

            // header("Location: ../view/dashboard.php");
           
            
        


            switch ($user["user_role"]) {
                case '1':
                    header("Location: ../view/shop.php");
                    exit();
                case '2':
                    header("Location: ../view/manage_brand.php");
                    exit();
                default:
                    header("Location: ../login.php?error=role_not_recognized");
                    exit();
            
            }


        } else {
            // Redirect back to login page with error message
            header("Location: ../view/login.php?error=invalid_credentials");
            exit();
        }
    
    } else {
        // Redirect back to login page with error message
        header("Location: ../view/login.php?error=missing_fields");
        exit();
    }
} else {
    // Redirect back to login page
    header("Location: ../view/login.php");
    exit();
}
?>





