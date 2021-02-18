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
     
    // var btn=$('#getmotp').val();
   
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
      // var btn=$('#getmotp').val();
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
  //    $_SESSION["favcolor"] = "yellow";
  
     debugger;
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
              
  
          $.ajax({
              url:'sign.php',
              type:"POST",
              data:{
                  'name':name,
                  'email':email,
                  'mobile':mobile,
                  'password':password,
                 
              },
              success: function(data){
                 $('#result').html(data);
              }
          });
          } 
      });
      
  
  });
  $(document).ready(function(){

    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });
  
    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });
  
  });