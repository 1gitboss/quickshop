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

function show_all_users_ctr(){
    $users = new customer_class();

    return $users-> show_all_users();

}
function update_user_role_ctr($customer_id, $new_role) {
    $db = new db_connection();
    $sql = "UPDATE customer SET user_role = '$new_role' WHERE customer_id = '$customer_id'";
    return $db->db_query($sql);
}

function delete_user_ctr($customer_id) {
    $db = new db_connection();
    $sql = "DELETE FROM `customer` WHERE customer_id = '$customer_id'";
    return $db->db_query($sql);
}

function get_all_roles_ctr() {
    $db = new db_connection();
    $sql = "SELECT * FROM userrole";
    return $db->db_fetch_all($sql);
}

?>



?>