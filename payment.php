<?php




echo '<script src="https://www.paypal.com/sdk/js?client-id=AYLx77DwqNi185MM_AEBqgWsfWBCgcngZYHS7U_pbpTqD3XHbU0x23Ns2auk6pIC9rPfY6E54W7is39G"></script>';
echo "<script >paypal.Buttons({
  style: {
    layout:  'vertical',
    color:   'blue',
    shape:   'rect',
    label:   'paypal',
    width:'120px'
  },
    createOrder:function(data,actions)
{
    return actions.order.create({
        purchase_units:[{
            amount:{
                value: <?php echo $_SESSION[total] ?>
            }
               
            
        }]
    });
  
},

onApprove:function(data,actions){
    return actions.order.capture().then(function(details){
       console.log(details);
      
     
       alert('payment successful!!!!!!!!!!!')";
       ?>

       
      <?php
      unset($_SESSION['cartdata']);
      echo  "window.location.href='index.php'
      
      
    });
},
}).render('Body');


</script>";


?>