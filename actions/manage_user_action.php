<?php

include("../controllers/customer_controller.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $customer_id = $_POST['customer_id'];

    if ($action === 'edit') {
        // Update role using the new role_id
        $new_role_id = $_POST['new_role_id'];
        $result = update_user_role_ctr($customer_id, $new_role_id);

        if ($result) {
            header("Location: ../view/manage_users.php?success=Role updated successfully");
        } else {
            header("Location: ../view/manage_users.php?error=Failed to update role");
        }
    } elseif ($action === 'delete') {
        // Remove the customer
        $result = delete_user_ctr($customer_id);

        if ($result) {
            header("Location: ../view/manage_users.php?success=User removed successfully");
        } else {
            header("Location: ../view/manage_users.php?error=Failed to remove user");
        }
    }
}

