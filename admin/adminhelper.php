<?php include '../product.php'?>
<?php
extract($_POST);


$prod_available=1;
$prod_launch_date=date('Y/m/d H:i:s');
$prod_parent_id=1;
$p=new product();
 if($action=='addprodcat'){
$res=$p->addprodcat($prod_parent_id, $prod_name, $prod_available, $page_link, $prod_launch_date);


if($res){
    echo "inserted";
}
else{
    echo "not inserted";
}
 }
 else if($action=='showprodlist')
 {
    $prod=new Product();
    $prod->showprodlist();

 }


?>