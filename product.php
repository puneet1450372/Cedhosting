<?php
require_once('config.php');
class Product extends Database
{
   public $action;
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
                    if ($row['prod_available']=='1') {
                        $row['prod_available']="available";
                    } else {
                        $row['prod_available']="unavailable";
                    }
                    if($row['prod_parent_id']=='1')
                    {
                        $row['prod_parent_id']="Hosting";
                    }
                    
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
            $decoded_desc=json_decode($row['description']);
            $webspace= $decoded_desc->{'webspace'};
            $bandwidth= $decoded_desc->{'bandwidth'};
            $freedomain= $decoded_desc->{'freedomain'};
            $languagetechnology= $decoded_desc->{'languagetechnology'};
            $mailbox= $decoded_desc->{'mailbox'};
            $prod_parent_id=$row['prod_parent_id'];
           
           
            $sql="SELECT * FROM `tbl_product1` WHERE `id`='$prod_parent_id'";
            $roww=$this->conn->query($sql);
            
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['page_link'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox);
        }
      return json_encode($arr);
    
    }
    public function getCatPageData($id)
    {
        $sql="SELECT `tbl_product1`.*,`tbl_product_description`.* FROM tbl_product1 JOIN tbl_product_description ON `tbl_product1`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product1`.`prod_parent_id`='$id'";
        $data=$this->conn->query($sql);            
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                if ($row['prod_available']=='0') {
                    continue;
                } else {
                    $available="available";
                }
                $decoded_description=json_decode($row['description']);
                $webspace=$decoded_description->{'webspace'};
                $bandwidth=$decoded_description->{'bandwidth'};
                $freedomain=$decoded_description->{'freedomain'};
                $languagetechnology=$decoded_description->{'languagetechnology'};
                $mailbox=$decoded_description->{'mailbox'};
                $arr[]=array(
                    "prod_id"=>$row['prod_id'],
                    "sku"=>$row['sku'],
                    "mon_price"=>$row['mon_price'],
                    "annual_price"=>$row['annual_price'],
                    "prod_parent_id"=>$row['prod_parent_id'],
                    "prod_name"=>$row['prod_name'],
                    "link"=>$row['page_link'],
                    "available"=>$available,
                    "prod_launch_date"=>$row['prod_launch_date'],
                    "webspace"=>$webspace,
                    "bandwidth"=>$bandwidth,
                    "freedomain"=>$freedomain,
                    "languagetechnology"=>$languagetechnology,
                    "mailbox"=>$mailbox
                );
            }
            return $arr;
        }
        return false;
    }
    public function getPageHeading($id) {
        $sql="SELECT * FROM `tbl_product1` WHERE `id`='$id'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            return $data->fetch_assoc();
        } else {
            return false;
        }
       
    }
    public function addToCart($prodid)
    {
        $sql="SELECT `tbl_product1`.*,`tbl_product_description`.* FROM tbl_product1 JOIN tbl_product_description ON `tbl_product1`.`id` = `tbl_product_description`.`prod_id` WHERE `tbl_product1`.`id`='$prodid'";
        $data=$this->conn->query($sql);            
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                if ($row['prod_available']=='0') {
                    continue;
                } else {
                    $available="available";
                }
                $decoded_description=json_decode($row['description']);
                $webspace=$decoded_description->{'webspace'};
                $bandwidth=$decoded_description->{'bandwidth'};
                $freedomain=$decoded_description->{'freedomain'};
                $languagetechnology=$decoded_description->{'languagetechnology'};
                $mailbox=$decoded_description->{'mailbox'};
                $arr=array(
                    "prod_id"=>$row['prod_id'],
                    "sku"=>$row['sku'],
                    "mon_price"=>$row['mon_price'],
                    "annual_price"=>$row['annual_price'],
                    "prod_parent_id"=>$row['prod_parent_id'],
                    "prod_name"=>$row['prod_name'],
                    "link"=>$row['page_link'],
                    "available"=>$available,
                    "prod_launch_date"=>$row['prod_launch_date'],
                    "webspace"=>$webspace,
                    "bandwidth"=>$bandwidth,
                    "freedomain"=>$freedomain,
                    "languagetechnology"=>$languagetechnology,
                    "mailbox"=>$mailbox
                );
            }
            return ($arr);
        }
        return false;
    }

    public function ActionwithCategory($id,$action)
    {
        {
            if ($action=='edit') {
                $sql="SELECT * FROM `tbl_product1` WHERE `id`='$id'";
                $data=$this->conn->query($sql);
                if ($data->num_rows>0) {
                    while ($row=$data->fetch_assoc()) {
                        return $row;
                    }
                }
                return false;
            }
            if ($action=="delete") {
                $sql="DELETE FROM `tbl_product1` WHERE `id`='$id'";
                $this->conn->query($sql);
                $sql="SELECT * FROM `tbl_product1` WHERE `prod_parent_id`='$id'";
                $data=$this->conn->query($sql);
                if ($data->num_rows>0) {
                    while ($row=$data->fetch_assoc()) {
                        $id=$row['id'];
                        $sql="DELETE FROM `tbl_product_description` WHERE `prod_id`='$id'";
                        $this->conn->query($sql);
                        $sql="DELETE FROM `tbl_product1` WHERE `id`='$id'";
                        $this->conn->query($sql);
                    }
                }
                return true;
            }
        }
        
}

public function companyaddress(){

    $sql="select  *from tbl_company_info";
    $data=$this->conn->query($sql);   

   $num=mysqli_num_rows($data);

   $asarray=mysqli_fetch_assoc($data);
   return $asarray;
}

public function states()
{
    $sql="select * from  tbl_state";
    $data=$this->conn->query($sql);

 
    

    return $data;
  
}

public function billingadd($user_id,$billing_name,$address,$city,$state,$country,$pincode)
{
    $sql="insert into tbl_user_billing_add(user_id,billing_name,address,city,state,country,pincode) values('$user_id','$billing_name','$address','$city','$state','$country','$pincode')";
    $data=$this->conn->query($sql);

    return $data;
}

}