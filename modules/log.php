<?php
   session_start();
   include "../setup/konekcija.php";
   if(isset($_POST['logsubmit'])){

      $email=$_POST['logemail'];
      $pass=$_POST['logpass'];

      $errors=[];
      $rePass = "/^(?=.*[A-z])(?=.*\d){8,20}$/";

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errors[]="The email isn't good";
      }
      if(!$pass){
         $errors[]= "You must write your password.";
     }
     elseif(!preg_match($rePass, $pass)){
         $errors[]="Your password isn't in the right format.The password must be 8 characters long and it should contain at least 1 number and 1 letter";
     }
     if(count($errors)>0){

     }
     else{
        $pass=md5($pass);
        $query="SELECT * FROM user WHERE email = :email AND s_password = :pass";

        $statment = $conn->prepare($query);
        $statment = bindParam(":email", $email);
        $statment = bindParam(":pass", $pass);

        $statment->execute();
        $user=$statment->fetch();

        if($user){
           $_SESSION['user']= $user;
           header("Location:../index.php");
        }
        else{
           $_SESSION['erors']= "The email or password aren't okay";
           header("Location:../index.php");

        }
     }
   }
?>