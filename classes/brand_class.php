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

class brand_class extends db_connection
{
    public function add_brand($name)
    {
        $ndb = new db_connection();
        $name = mysqli_real_escape_string($ndb->db_conn(), $name);
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$name')";
        return $this->db_query($sql);
    }
    //--INSERT--//


    //--SELECT--//
    public function get_brands(){
        $sql = "SELECT * FROM `brands`";
        return $this-> db_fetch_all($sql);
    }



    //--UPDATE--//



    //--DELETE--//
    public function delete_brand($id)
    {

        $sql = "DElETE FROM `brands`WHERE brand_id = '$id'";
        return $this->db_query($sql);
    }


}

?>