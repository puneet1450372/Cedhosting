<?php include '../product.php' ?>
<?php

session_start();
extract($_POST);


$prod_available = 1;
$prod_launch_date = date('Y/m/d H:i:s');
$prod_parent_id = 1;
$prod = new Product();

if ($action == 'addprodcat') {
	$res = $prod->addprodcat($prod_parent_id, $prod_name, $prod_available, $page_link, $prod_launch_date);


	if ($res) {
		echo "inserted";
	} else {
		echo "not inserted";
	}
} else if ($action == 'showprodlist') {

	$output = "";

	$customers =  $prod->showprodlist();

	if ($prod->totalRowCount() > 0) {
		$output .= "<table class='table  table-hover'>
			        <thead>
			          <tr>
			          
			            <th>Category Parent Name</th>
			            <th>Category Name</th>
			            <th>prod_available</th>
			            <th>page_link</th>
                        <th>prod_launch_date</th>
                        <th>Action</th>
			          </tr>
			        </thead>
			        <tbody>";
		foreach ($customers as $customer) {
			$output .= "<tr>
			           
			            <td>" . $customer['prod_parent_id'] . "</td>
						<td>" . $customer['prod_name'] . "</td>
				
                        <td>" . $customer['prod_available'] . "</td>
			            <td>" . $customer['page_link'] . "</td>
			            <td>" . $customer['prod_launch_date'] . "</td>
			            <td>
			              <a href='#editModal' style='color:green' data-toggle='modal' 
                          class='editBtn' id='" . $customer['id'] . "'>
                    
						  <button  type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'  id='" . $customer['id'] . "'>edit</button>

			            <button  type='button' class='btn btn-danger deleteBtn' data-toggle='modal' data-target='#exampleModal'  id='" . $customer['id'] . "'>Delete</button>
			            </td>
			        </tr>";
		}
		$output .= "</tbody>
      		</table>";
		echo $output;
	} else {
		echo '<h3 class="text-center mt-5">No records found</h3>';
	}
} else  if ($action == 'addprod') {

	$res1 = $prod->addnewproduct($productid, $prod_name, $page_url, $mon_price, $annual_price, $sku, $webspace, $bandwidth, $freedomain, $language, $mail);

	if ($res1) {
		echo "inserted data successfully";
	} else {
		echo " datab inserted not";
	}
} else  if ($action == 'viewtable') {
	$data = $prod->showAddProducts();
	$d = print_r($data);
}

if ($action == 'addtocart') {

	$cartdata = $prod->addtocart($prod_id);

	$temp = true;
	$prodid = $_POST['prod_id'];
	if (!isset($_SESSION['cartdata'])) {
		$_SESSION['cartdata'] = array();
	}
	$cartdata = $_SESSION['cartdata'];
	
	for ($i = 0; $i < count($cartdata); $i++) {
		if ($cartdata[$i][0] == $prodid) {
			$_SESSION['cartdata'][$i][4] += 1;
			$temp = false;
		}
	}
	if ($temp == true) {
		$data = $prod->addToCart($prodid);
		$_SESSION['cartdata'][] = [$data['prod_id'], $data['prod_name'], $data['mon_price'], $data['sku'], 1, "<a href='javascript:void(0)' data-id=" . $data['prod_id'] . " id='deletecartproduct'><button type='button' class='btn btn-danger'>Cancel</button></a>"];
	}
	print_r($_SESSION['cartdata']);
}

if ($action == "cart") {
	$arr['data'] = array();
	if (isset($_SESSION['cartdata'])) {
		$cartdata = $_SESSION['cartdata'];
		for ($i = 0; $i < count($cartdata); $i++) {
			$arr['data'][] = $cartdata[$i];
		}
	}
	echo json_encode($arr);
}
if ($action == "deletecart") {
	$prodid = $_POST['prod_id'];
	$cartdata = $_SESSION['cartdata'];
	
	for ($i = 0; $i < count($cartdata); $i++) {
		if ($cartdata[$i][0] == $prodid) {
			unset($_SESSION['cartdata'][$i]);
			$_SESSION['cartdata'] = array_values($_SESSION['cartdata']);
			break;
		}
	}
}
?>