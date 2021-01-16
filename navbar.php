<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><img src="images/hosting.png" width="55%;" style="margin-top: -60px"></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
							
								<li><a href="services.php">Services</a></li>
                                <li class="dropdown" >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Hosting<i class="caret"></i></a>
                            <ul class="dropdown-menu" >
						
							<?php
							require_once('product.php');
							
							 $p=new product();
							 $y=$p->productcategory();
							 $n=mysqli_num_rows($y);
                                
                                for($i=0;$i<=$n;$i++)
                                {
                                $res = $y->fetch_assoc();
                            ?>
							
							<li ><a href="hosting.php?id=<?php echo $res['id'] ?>"><?php echo $res['prod_name']; ?></a></li> 
							
							<?php } ;?>
						 	
							
							
							     
							
                            </ul>  			
                        </li>
                        <li><a href="pricing.php">pricing</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><span class="badge badge-light">0</span></i></a> </li>

							 <?php
						if (!isset($_SESSION['user'])) {
							echo '<li><a href="logout.php">Logout</a></li>';
						}
						else {
							
							echo '<li ><a href="login.php">Login</a></li>';
						}
						?>
							</ul>
							<ul>

							</ul>		  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
</body>
</html>