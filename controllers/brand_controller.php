<?php

//connect to the user account class
include("../classes/brand_class.php");

//sanitize data

function add_brand_ctr($name)
{
    $addbrand = new brand_class();
    return $addbrand->add_brand($name);
}

function delete_brand_ctr($id){
    $deletebrand = new brand_class();
    return $deletebrand->delete_brand($id);

}

function view_brands_ctr(){

    $viewbrand = new brand_class();
    return $viewbrand->get_brands();
}

?>