<?php include 'navbar.php' ?>
<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    include_once 'product.php';
    $product=new product();
    $heading=$product->getPageHeading($id);
    $datacon=$product->getCatPageData($id);
    if ($heading==false || $datacon==false) {
        header("location:index.php");
    }
    $html1=$heading['page_link'];
} else {
    header('Location:index.php');
}
// require_once "headercommon.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
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
<!--script-->
</head>
<body>
<body>
<!---singleblog--->
<div class="content">
    <div class="linux-section">
        <div class="container">
            <div class="linux-grids">
                <div class="col-md-8 linux-grid">
                <h2><?php echo $heading['prod_name'] ?></h2>
                <ul>
                    <?php echo $html1?>
                </ul>
                    <a href="#myTab">view plans</a>
                </div>
                <div class="col-md-4 linux-grid1">
                    <?php
                    $patternarray=array("/window/i", "/word/i", "/cms/i", "/linux/i", "/mac/i");
                    $temp=true;
                    foreach ($patternarray as $val) {
                        if (preg_match($val, $heading['prod_name'])) {
                            $temp=false;
                            $str=str_replace("/", "", $val);
                            $strfinal=rtrim($str, "i");
                            echo '<img src="images/'.$strfinal.'.png" class="img-responsive" alt=""/>';
                            break;
                        }
                    }
                    if ($temp==true) {
                        echo '<img src="images/window.png" class="img-responsive" alt=""/>';
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="tab-prices">
        <div class="container ">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content justify-content-center">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="linux-prices" id="myTab">
                            <?php
                            $html="";
                            for ($i=0;$i<count($datacon);$i++) {
                                $html.='<div class="col-md-3 linux-price">
                                    <div class="linux-top">
                                    <h4>'.$datacon[$i]["prod_name"].'</h4>
                                    </div>
                                    <div class="linux-bottom">
                                        <h5>₹'.$datacon[$i]["mon_price"].' <span class="month">per Month</span></h5>
                                        <h5>₹'.$datacon[$i]["annual_price"].' <span class="month">per Annum</span></h5>
                                        <h6>Single Domain</h6>
                                        <ul>
                                        <li><strong>'.$datacon[$i]["webspace"].'GB </strong> Web Space</li>
                                        <li><strong>'.$datacon[$i]["bandwidth"].'GB </strong>Bandwidth</li>
                                        <li><strong>'.$datacon[$i]["mailbox"].' </strong> Mailbox</li>
                                        <li><strong>'.$datacon[$i]["freedomain"].' </strong> Free Domain</li>
                                        <li><strong>'.$datacon[$i]["languagetechnology"].' </strong> Language/Technology</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/india.png"></li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" id="addtocart" data-toggle="modal" data-target="#exampleModal" data-id='.$datacon[$i]["prod_id"].' >buy now</a>
                               
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Choose your Plan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                       
                                         <select style="text-align: center; width:100%; height:40px;" id="plan">
                                         <!-- <option value="select"><-----------------Select-------------></option> -->
                                         <option value='.$datacon[$i]['mon_price'].'>Monthly plan</option>
                                         <option value=' .$datacon[$i]['annual_price']. '>Annualy plan</option>
                                         
                                         </select>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary" id="ok">Ok</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    </div>';
                            }
                            print_r($html);
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->

    <!-- clients -->
<div class="clients">
    <div class="container">
        <h3>Some of our satisfied clients include...</h3>
        <ul>
            <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
            <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
            <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
            <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
            <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
            <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
        </ul>
    </div>
</div>
<!-- clients -->
    <div class="whatdo">
        <div class="container">
            <h3>Linux Features</h3>
            <div class="what-grids">
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="what-grids">
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="result"></div>
    <script>
        $('#myTab').on('click','#addtocart',function(){
            var prod_id=$(this).data('id');
        
            $.ajax({
                url: 'admin/adminhelper.php',
                method: 'post',
                data: {
                    action:'addtocart',
                    prod_id: prod_id,
                    
                },
                success: function(msg){
                 
                    $('#result').html(msg);     },
                error: function(){
                    alert("error in fetching product");
                }
            });
        });
       $('#ok').click(function(){
$(location).attr('href','cart.php');
       })
            // });
        // })
        
    </script>

</div>
<?php
include "footer.php";
?>

