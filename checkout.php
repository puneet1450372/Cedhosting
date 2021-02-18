<?php
// if(count($_SESSION['cartdata'])<1)
// {
//    echo "<script>alert('Add atleast one product')</script>";
//    echo  "<script>window.location.href='cart.php'</script>";
// }
// else{
//   header('location:checkout.php');
// }
?>
  <?php include 'navbar.php' ?>
<?php


if(isset($_POST['submit']))
{
require_once('product.php');
$user_id=$_SESSION['id'];
$billing_name=$_POST['firstname'];
$state=$_POST['state'];
$country='india';
$pin=$_POST['zip'];
$add=$_POST['address'];
$city=$_POST['city'];
$db=new Product;
$conn=$db->billingadd($user_id,$billing_name,$add,$city,$state,$country,$pin);

if($conn)
{
  //echo "successful";
}
else{
  echo "not successful";
}

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
 <style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

/* .container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
} */

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
select{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  
    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action=" " method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>
              <div class="row">
              <div class="col-50">
              
                <select  id="state" name="state" required>
                <?php
	require_once('product.php');
  $obj=new Product();
  $res=$obj->states();
  while($res1=mysqli_fetch_assoc($res))
  {
    ?>
    <option value="<?php  echo $res1['name']; ?>"><?php echo $res1['name']; ?></option>
  <?php	
  }
  ?>
 </select>
 <input type="submit" name="submit" value="submit" class="btn btn-primary">
 <!-- <button type='submit'>continue to checkout</button> -->
                <!-- <input type="text" id="state" name="state" placeholder="NY"> -->
              </div>
              <div class="col-50">
                
                <input type="text" id="zip" name="zip" placeholder="10001" required>
               
              </div>
            </div>
          </div>
         
          <div class="col-50">
 <script  src="https://www.paypal.com/sdk/js?client-id=AYLx77DwqNi185MM_AEBqgWsfWBCgcngZYHS7U_pbpTqD3XHbU0x23Ns2auk6pIC9rPfY6E54W7is39G"></script>

            <h3 style="color:red">Product Details</h3>
            <?php

  if(isset($_POST['submit']))
  {          
           $total=0;
           for ($i=0;$i<count($_SESSION['cartdata']);$i++)
           {
           $data =$_SESSION['cartdata'][$i];
           
           echo "<h4 style='color:green'>Product Name".":".($data[1])."</h4><br>";
           echo "<h4>Product Price".":".($data[2])."</h4><br>";
           
           echo "<h4>Product Quantity".":".($data[4])."</h4><br>";
           $total+=$data[2];
           
           
           }
           echo "<h3 style='color:red'>Billing Details</h3>";
           echo "<h4>Billing name:"." ".$billing_name."<br>";
           echo " state: "." ".$state."<br>";
           echo "city: "." ".$city."<br>";
           echo " country: ". " "."India"."<br>";
           echo "pincode: "." ".$pin."<br></h4>";
           if($state=='Up')
           {
            $t1=$total*0.09;
            echo "<h3>SGST 9% : $".$t1."<br></h3>";
            $t2=$total*0.09;
            echo "<h3>CGST 9% : $".$t2."<br></h3>";
           $t=$t1+$t2;
            
           
           }
           else{
            
            $t=$total*0.18;
             echo "GSt 18%: $".$t."<br>";
            
           }
           echo "<h3>taotal money before tax : $".$total."<br></h3>";
           echo "<h3>total money after tax : $";
           $totalmoney= $t+$total;
           echo $totalmoney."</h3>";
  } 
// foreach( $data as $key => $value)
// {
   
// }
// echo "data" . " : " . $value . "<br>";
?>


      </form>
      <p id="status"></p>
    </div>
  </div>
  <div >
  
<script >paypal.Buttons({
  style: {
    layout:  'vertical',
    color:   'blue',
    shape:   'rect',
    label:   'paypal',
   
  },
    createOrder:function(data,actions)
{
    return actions.order.create({
        purchase_units:[{
            amount:{
                value: <?php echo $totalmoney ?>
            }
               
            
        }]
    });
  
},

onApprove:function(data,actions){
    return actions.order.capture().then(function(details){
       console.log(details);
      
     
       alert('payment successful!!!!!!!!!!!');
       alert('your order placed successfully!!');
       alert('you redirected to your home page');
      
   
       window.location.href='index.php';
      
      
    });
},
}).render('Body');


</script>
 

      
     
    
      </div>
    </div>
 
<script>
// $(document).ready(function() {
//   //View Record
 
//   $.ajax({
//     url:"admin/adminhelper.php",
//     type:'POST',
//     data:{
//       action:'cart'
//     },
//     success : function (data){
//       alert(data);


//     }
//   })
      
          

//     })
      </script>
</body>
</html>