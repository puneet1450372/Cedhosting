<?php include 'user.php' ?>
<?php

extract($_POST);
$insert=new User();
$pass=password_hash($password,PASSWORD_BCRYPT);

if($action=='email')
{
$sql=$insert->emailsign($email,$name,$mobile,$date ,$pass,$security_question,$answer) ;

if($sql){
    echo "data inserted succesfully!!!!!!!!!";
    
}
else{
    echo "data not inserted ";
    
}
}






?>