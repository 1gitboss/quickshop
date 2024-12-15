<?php
    session_start();

function check_access($required_role=null){
    // redirect to login page if the user is not logged in
    if (!isset($_SESSION['user_id'])) {
        header('location:../view/login.php');
        exit();
    }
    if ($required_role !==null) {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != $required_role) {
            header('location:../error/error403.php');
            exit();
        }


    }
}

function for_personnel()
{
    if (!isset($_SESSION['user_id'])|| $_SESSION['user_role']=="1") {
        header('location:../error/error403.php');
        exit();
    }
}

function can_access_action($allowed_roles=[]){
    if(!is_array($allowed_roles)){
        $allowed_roles = [$allowed_roles];
}
    return isset($_SESSION['user_role']) && in_array($_SESSION['user_role'], $allowed_roles);
}