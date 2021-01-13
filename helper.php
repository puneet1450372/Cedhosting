<?php include 'user.php' ?>
<?php

extract($_POST);
$insert=new user();
$pass=password_hash($password,PASSWORD_BCRYPT);


$sql=$insert->emailsign($email,$name,$mobile,$date ,$pass,$security_question,$answer) ;

if($sql){
    echo "data inserted succesfully!!!!!!!!!";
    
}
else{
    echo "data not inserted ";
    
}
 




?>