<?php
require_once('config.php');
class Product extends Database
{

    public $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }


    public function productcategory()
    {

        $sql = "select *from tbl_product where prod_parent_id=1";
        $y = $this->conn->query($sql);
        

        return $y;
    }


    public function addprodcat($prod_parent_id, $prod_name, $prod_available, $page_link, $prod_launch_date)
    {

        $sql = "insert into tbl_product (prod_parent_id, prod_name, prod_available, page_link, prod_launch_date)
        values('$prod_parent_id', '$prod_name', '$prod_available', '$page_link', '$prod_launch_date') ";
        $y = $this->conn->query($sql);

        return $y;
    }


    public function showprodlist()
    {
        $sql="select *from tbl_product ";

        $query=$this->conn->query($sql);

         $finalresult=json_encode($query);
         
         
         return $finalresult;

    }
}
