<?php include 'config.php' ?>
<?php
extract($_POST);

$date=date('Y/m/d H:i:s');

class User{
   public $conn;
   public $email;
   public $mobile;
   public $date;
   public function __construct()
   {
      $dbh=new Database();
      $this->conn=$dbh->connect();
     
   }
   
 public function emailsign($email,$name,$mobile ,$date,$password,$security_question,$answer)
    {
  
    $sql="insert into tb_user (email,name,mobile,email_approved ,phone_approved ,active ,is_admin,sign_up_date,password,security_question,security_answer)
   values ('$email','$name','$mobile','1','0','1','0','$date','$password','$security_question','$answer')";
   
   $y=$this->conn->query($sql);
   return $y;
   
}
public function emaillogin($email,$pass){
  
      $email_search="select *from tb_user where email='$email'";

         $query =$this->conn->query($email_search);
   $email_count = mysqli_num_rows($query);
   if($email_count){
   $email_pass =mysqli_fetch_assoc($query);
   // $status=$email_pass['status'];
   $db_pass =$email_pass['password'];
  
   $db_admin=$email_pass['is_admin'];
   $pass_decode=password_verify($pass, $db_pass);
   if($pass_decode){
        
      if($db_admin==0){
         echo "<script>user login successful</script>";
         $_SESSION['user']=$email_pass['name'];
         header('location:index.php');
     
      }
      else if($db_admin==1){
         
         $_SESSION['admin']=$email_pass['name'];
         header('location:admin/index.php');
      }

   }
   else{
      echo "<i style='color:red'>password incorrect<i>";
   }
}
else{
   echo  "<i style='color:red'>Invalid Email<i>";

  
  }


}



    
 }

 
?>