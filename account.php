
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
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
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <style>
        #submit{
            margin-bottom:35px;
            background-color: #ff7b4f;
            color:white;
        }
        #submit:hover{
          background-color: #5989ea;
        }
       /* button{
        height: 35px;
           width: 300px;
            border-radius: 10px;
            outline:none;
            background-color: green;
           
       } */
        body{
            background-image:url('taxi4.jpg');
             /* height: 600px; */
             border-radius: 100px;
             background-size:100% 100%;
             
        }
        input{
           height: 45px;
           width: 50%;
            /* border-radius: 4px;
            outline:none; */
            margin-top:20px;
        }
       
        form{
            /* background-color: #ddd; */
            margin-bottom:50px;
            border-radius:10px;
        }
     select{
      height: 45px;
           width: 50%;
            border-radius: 4px;
            outline:none;
            margin-top:20px;

     }
       .signbtn{
         margin-left:50%;
       } 
       span{
         text-align: center;
       }
        </style>
</head>
<body>
<?php include 'navbar.php'?>
<section>
     
    <form  style="text-align:center">
    <h3 style="color:green" id="result"></h3>
    
        <h1>Personal Information</h1>
       
   <p> <input type="text" id="fname" name="fname" placeholder="name*"></p>
  
   <p> <input type="email" id="email"  name="email" placeholder="Email*"></p>
   
   <div class="container">
                                             
     <button type="button" data-toggle="modal" data-target="#myModal"   id="getgotp" name="getgotp" style=" background-color: #ff7b4f;border-color: #ccd138; color:#444a49;margin-top:10px;margin-bottom:5px;margin-left:21%; font-weight:400;padding-bottom:0px;float:left;font-size:15px;height:40px; width:100px;">Email otp</button>

                                              
                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                     
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title" style="margin-right:50%;" >CedCab</h4>
                                                            <button type="button" class="close" data-dismiss="modal" ><a href="taxi.php">&times;</a></button>
                                                               
                                                            </div>
                                                            
                                                            <div class="modal-body">
                                                                <p id="data" style="font-size:25px;"></p>
                                                                 <input type="text" id="otpgbox" placeholder="enter email otp">
                                                            </div>
                                                            <div class="modal-footer">
                                                           
                                                            <button type="button" style="background-color: #ff7b4f;border-color: #ccd138; color:#444a49;margin-top:10px;margin-bottom:5px;margin-left:80%; font-weight:400;padding-bottom:0px;float:left;font-size:15px;height:40px; width:100px;" id="vgotp" name="vgotp" >verify otp</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
    
  
   
    <!-- <button type="button" style="background-color: red; font-size:15px;" id="getmotp" name="getmotp" value="1">Get OTP</button>
  <button type="button" style="background-color: green; font-size:15px;" id="vmotp" name="vmotp"  value="2">verify otp</button><br>
  <p id="data"></p> -->
   <p> <input type="text" id="mobile"  name="mobile"  placeholder="Mobile no.*"></p>
 <!-- <button type="button" style="background-color: red; font-size:15px;margin-bottom:15px;margin-left:0%;" id="getmotp" name="getmotp" value="1">Get OTP</button>
  <button type="button" style="background-color: green; font-size:15px;" id="vmotp" name="vmotp"  value="2">verify otp</button><br>
<input type="text" id="otpmbox" placeholder="enter mobile otp"><br> -->
<!-- Button trigger modal -->
<div class="container">
<button type="button" data-toggle="modal" id="getmotp" name="getmotp" data-target="#exampleModal" style=" background-color: #ff7b4f;border-color: #ccd138; color:white;margin-top:10px;margin-bottom:5px;margin-left:20%; font-weight:400;padding-bottom:0px;float:left;font-size:15px;height:40px; width:100px;">
 mobile otp
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">cedcab</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p id="data1" style="font-size:20px;"></p>
      <input type="text" id="otpmbox" placeholder="enter mobile otp"><br>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-primary" id="vmotp" name="vmotp" style=" background-color: #ff7b4f;border-color: #ccd138; color:white;margin-top:10px;margin-bottom:5px;margin-left:80%; font-weight:400;padding-bottom:0px;float:left;font-size:15px;height:40px; width:100px;">verify</button>
      </div>
    </div>
  </div>
</div> 
</div>
<select id="security_question" name="security_question"> 
                                <option value="Please select security question">Please select security question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select>
      <p><input type="text"    id="answer" name="answer" placeholder="Answer*"></p>
    <p><input type="password"   id="password" name="password" placeholder="password"></p>
    <p><input type="password"  id="cpassword" name="cpassword" placeholder="confirm password"></p>
    <input type="button" id="submit" value="Create An Account" name="submit"><br>
    
    
   </form>
</section> 
<script>
  $(document).ready(function(){
    $("#getgotp").hide();
    $("#getmotp").hide();
    $("#email").focus(function(){
      $("#getgotp").show();
     });
     $("#mobile").focus(function(){
      $("#getmotp").show();
     });
  
     $('#password').keyup(function(){
      $('#cpassword').removeAttr("disabled");
    
     })
     $('#fname').keyup(function(){
      $('#email').removeAttr("disabled");
    
     })
  });
  
   
  $(document).ready(function(){
      $('#getgotp').click(function(){
    var email=$('#email').val();
     
    var btn=$('#getmotp').val();
   
    $.ajax({
      url:'email.php',
      type:'POST',
      data:{data:'on' ,email:email },
  
      success : function(data){
        $('#data').html(data);
  
      }
  
    })
   
  });
      
  $('#vgotp').click(function(){
    var votp=$('#otpgbox').val();
  $.ajax({
      url:'email.php',
      type:'POST',
      data:{data:'off',votp:votp},
      success:function(data){
        $('#data').html(data);
        $("#getgotp").hide();
        $('#mobile').removeAttr("disabled");
    
      }
      
    })
  
  })
  $('#getmotp').click(function(){
      var mobile=$('#mobile').val();
      var btn=$('#getmotp').val();
      console.log(mobile);
      $.ajax({
        url:'mob.php',
        type:'POST',
        data:{data:"on",mobile:mobile },
  
        success : function(data){
          $('#data1').html(data);
  
        }
  
      })
    });
    $('#vmotp').click(function(){
      var votp=$('#otpmbox').val();
  $.ajax({
        url:'mob.php',
        type:'POST',
        data:{data:"off",votp:votp},
        success:function(data){
          $('#data1').html(data);
          $("#getmotp").hide();
        $('#password').removeAttr("disabled");
        }
      })
  
    })
  })
  $(document).ready(function(){
      $('#submit').click(function(){
        var votm=$('#otpmbox').val();
        var votg=$('#otpgbox').val();
          var name=$('#fname').val();
      var email=$('#email').val();
     var mobile=$('#mobile').val();
     var password=$('#password').val();
     var cpassword=$('#cpassword').val();
     var answer=$('#answer').val();
     var security_question=$('#security_question').val();
  
  
     
          if(name==""){
              alert("name not filled");
          }
          else if( email==""){
              alert("email not filled");
          }
          else if(mobile==""){
              alert("mobile not filled");
          }
          else if(password==''){
              alert("password not filled");
          }
          else if(cpassword==''){
              alert("password not filled");
          }
          else if(password!=cpassword)
          {
              alert('password and confirm password must be same');
           }
          else if( votm==""){
            alert('please verify the mobile number')
          }
          else if( votg==""){
            alert('please verify the gmail')
          }
          else{
              
  debugger;
          $.ajax({
              url:'helper.php',
              type:"POST",
              data:{
                  action:'email',
                  'name':name,
                  'email':email,
                  'mobile':mobile,
                  'password':password,
                  'answer':answer,
                  'security_question':security_question,
                 
              },
              success: function(data){
                alert(data);
                window.reload();
               
              }
          });
          } 
      });
      
  
  });
</script>
</body>
<?php include 'footer.php'?>
</html>