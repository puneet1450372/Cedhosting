<!DOCTYPE html>
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
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<title>Admin Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  
  <!-- jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <!-- jquery cdn -->
  <!-- datatable cdn -->
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
  </script>
  <!-- datatable cdn -->
  <!-- datatable css -->
  <link rel="stylesheet" 
  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <!-- datatable css-->
  
  <!-- text area -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
<!--lightboxfiles-->
	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>		
						<style>
							.nav-container{
    border-width:0;
    box-shadow:none;
    background-color: aliceblue;
}
.navbar {
    background-color: #99ccff; 
    border: 0;
}
						</style>				
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="tabledata">
                <thead class="thead-light">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Monthly Price/Annual price</th>
                       
                        <th>SKU</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                </table>
            </div>
            <a href="javascript:void(0)" id="checkoutbutton">Checkout</a>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
  //View Record
  var table= $('#tabledata').DataTable( {
        "ajax": {
          "url":"admin/adminhelper.php",
          "dataSrc" :"data",
           "type": "POST",
           "data": {"action": 'cart'}
        },
        // "columnDefs": [{
        //    "targets": -1,
        //     "data": null,
        //     "defaultContent": "<button class='btn btn-outline-danger'  id='d'>Delete</button>"
        // }]

      });

    //   $('#tabledata').on('click','#deletecartproduct',function(){

    //     var prod_id=$(this).data('id');
    //    alert(prod_id)
    //    debugger;
    //    $.ajax({
    //        url:"admin/adminhelper.php",
    //        type:"POST",
    //        data:{action:"deletecart",
    //                 prod_id:prod_id
    //     },
    //        success : function(msg){
    //            alert(msg);
    //        }
    //    })
    // })
    })
    $('#tabledata').on('click','#deletecartproduct',function(){
    var prod_id=$(this).data('id');
    alert(prod_id)
    $.ajax({
        url: 'admin/adminhelper.php',
        method: 'post',
        data: {
            action:"deletecart",
            prod_id: prod_id,
            deletecartproduct: true
        },success: function(msg){
            location.reload();
        },
        error: function(){
            alert("cart product deletion error");
        }
    });
});
</script>
    <?php include 'footer.php' ?>
</body>
</html>