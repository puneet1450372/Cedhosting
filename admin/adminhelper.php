<?php include '../product.php'?>
<?php
extract($_POST);


$prod_available=1;
$prod_launch_date=date('Y/m/d H:i:s');
$prod_parent_id=1;
$prod=new Product();
   
if($action=='addprodcat'){
$res=$prod->addprodcat($prod_parent_id, $prod_name, $prod_available, $page_link, $prod_launch_date);


        if($res){
                echo "inserted";
            }
        else{
                 echo "not inserted";
            }
 }

 else if($action=='showprodlist')
 {
   
    $output = "";

		$customers =  $prod->showprodlist();

		if ($prod->totalRowCount() > 0) {
			$output .="<table class='table  table-hover'>
			        <thead>
			          <tr>
			            <th>Id</th>
			            <th>prod_parent_id</th>
			            <th>prod_name</th>
			            <th>prod_available</th>
			            <th>page_link</th>
                        <th>prod_launch_date</th>
                        <th>Action</th>
			          </tr>
			        </thead>
			        <tbody>";
			foreach ($customers as $customer) {
			$output.="<tr>
			            <td>".$customer['id']."</td>
			            <td>".$customer['prod_parent_id']."</td>
                        <td>".$customer['prod_name']."</td>
                        <td>".$customer['prod_available']."</td>
			            <td>".$customer['page_link']."</td>
			            <td>".$customer['prod_launch_date']."</td>
			            <td>
			              <a href='#editModal' style='color:green' data-toggle='modal' 
                          class='editBtn' id='".$customer['id']."'>
                          <button type='button' class='btn btn-primary'>Edit</button></a>&nbsp;
			              <a href='' style='color:red' class='deleteBtn' id='".$customer['id']."'>
			              <button type='button' class='btn btn-danger'>Delete</button></a>
			            </td>
			        </tr>";
				}
			$output .= "</tbody>
      		</table>";
      		echo $output;	
		}else{
			echo '<h3 class="text-center mt-5">No records found</h3>';
        }
    }

  else  if($action=='addprod')
    {
    //     echo $productid;
    //     echo $prod_cat;
    //     echo $page_url;
      
    //     echo $prod_name;
    //     echo $annual_price;
    //     echo $mon_price;
    //     echo $sku;
    //     echo $webspace;
    //     echo $bandwidth;
    //     echo $mail;
    //     echo $freedomain;
    //     echo $language;
     
       $res1=$prod->addnewproduct($productid,$prod_name,$page_url,$mon_price,$annual_price,$sku,$webspace,$bandwidth,$freedomain,$language,$mail);
      
       if($res1){
        echo "inserted data successfully";
    }
else{
         echo " datab inserted not";
    }
    }


    
    if (isset($_POST['showproducts'])) {
        $data=$prod->showAddProducts();
        print_r($data);
      
    }


?>