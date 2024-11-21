<?php
//connect to the user account class
include_once("../classes/customer_class.php");



function registerUser_ctr($customer_name, $email, $password, $country, $city, $contact_no, $user_role){
	$adduser=new customer_class();
	$result = $adduser->registerUser($customer_name, $email, $password, $country, $city, $contact_no, $user_role);
}


function loginUser_ctr($email, $password) {
	$loginClass = new customer_class();
	$result = $loginClass->loginUser($email, $password);

    // Call the login_user method in the general_class
    return $result;
}




?>