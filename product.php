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

        $sql = "select *from tbl_product1 where prod_parent_id=1";
        $y = $this->conn->query($sql);
        

        return $y;
    }


    public function addprodcat($prod_parent_id, $prod_name, $prod_available, $page_link, $prod_launch_date)
    {

        $sql = "insert into tbl_product1 (prod_parent_id, prod_name, prod_available, page_link, prod_launch_date)
        values('$prod_parent_id', '$prod_name', '$prod_available', '$page_link', '$prod_launch_date') ";
        $y = $this->conn->query($sql);

        return $y;
    }
    public function showprodlist()
		{
			$sql = "SELECT * FROM tbl_product1";
			$query = $this->conn->query($sql);
			$data = array();
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				return false;
			}
        }
    public function totalRowCount(){
			$sql = "SELECT * FROM tbl_product1";
			$query = $this->conn->query($sql);
			$rowCount = $query->num_rows;
			return $rowCount;
        }
        
    // public function createnewproduct($prod_id ,$description,$mon_price,$annual_price,$sku){

    //   $sql= "insert into tbl_product_description (prod_id ,description,mon_price,annual_price,sku) values ('$prod_id','$description','$mon_price','$annual_price','$sku')";



    // }
    public function addnewproduct($productcategory, $productname, $pageurl, $monthlyprice, $annualprice, $sku, $webspace, $bandwidth,  $freedomain, $languagetechnology, $mailbox) 
    {
        $sql="INSERT INTO `tbl_product1` (`prod_parent_id`,`prod_name`,`page_link`,`prod_available`,`prod_launch_date`) 
        VALUES ('$productcategory','$productname','$pageurl','1',NOW())";
        if ($this->conn->query($sql)===true) {
            $last_id = $this->conn->insert_id;
            $description=array(
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox
            );
            $description=json_encode($description);
            $sql="INSERT INTO `tbl_product_description`(`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) 
            VALUES ('$last_id','$description','$monthlyprice','$annualprice','$sku')";
            if ($this->conn->query($sql)===true) {
                return true;
            }
            return false;
        }
        return false;
    }


    public function showAddProducts() 
    {
        $sql="SELECT `tbl_product1`.*,`tbl_product_description`.* FROM tbl_product1 JOIN tbl_product_description ON `tbl_product1`.`id` = `tbl_product_description`.`prod_id`";
        $data=$this->conn->query($sql);
        $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'language'};
            $mailbox=$decoded_description->{'mail'};
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product1` WHERE `id`='$prod_parent_id'";
            $roww=$this->conn->query($sql);
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['html'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox,"<a href='javascript:void(0)' class='btn btn-outline-info' data-id='".$row['prod_id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModalSignUp'>Edit</a> <a href='javascript:void(0)' class='btn btn-outline-danger' data-id='".$row['prod_id']."' id='delete-product-by-category'>Delete</a>");
        }
        return json_encode($arr);
    
    }

}