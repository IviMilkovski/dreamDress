<?php
    header("Content-type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
 include "../setup/konekcija.php";

try{
      $email = $_POST['mail'];
      $message = $_POST['areaMes'];
      
      $regMail = "/^[a-z][a-z\-\d-\.\_]+\@[a-z]+(\.[a-z]{2,11}){1,2}$/";
      $regMessage = "/^([A-z\d\.\-\_\,\/\@\"\'\s\n\!\?])+$/";

      $errors=[];

      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
         $errors[]= "The email isn't in the right format";
         }
      if(!preg_match($regMessage, $message)) {
         $errors[]="The message should have at least 10 characters";
         }
         if(count($errors)){
            $data = $errors;
         }
            else{
               $query2= "INSERT INTO messages (email, message) VALUES (:email, :message)";
               $stmt2 = $conn->prepare($query2);
               $stmt2->bindParam(':email', $email);
               $stmt2->bindParam(':message', $message);

               if($stmt2->execute()){
                  $odgovor = ["poruka"=>"Uspešan unos."];
            echo json_encode($odgovor);
            http_response_code(201);}
               }

            }
            catch(PDOException $e){
                http_response_code(500);
        }
    }
    else{
        http_response_code(404);
    }
?>