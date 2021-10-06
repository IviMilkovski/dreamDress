<?php
    header("Content-type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
 include "../setup/konekcija.php";
try{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];
        $reUsername = "/^[A-z0-9\_]{3,15}$/";
        $rePass = "/^[A-z0-9\_]{8,20}$/";

        if(!$username){
            $errors[]= "You must write your username";
        }
        elseif(!preg_match($reUsername, $username)){
           $errors[]="Your username isn't in the right format. Please use at least 3 characters.";
        }
        
        if(!$password){
            $errors[]= "You must write your password.";
        }
        elseif(!preg_match($rePass, $password)){
            $errors[]="Your password isn't in the right format.The password must be 8 characters long.";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors[]= "Polje za email nije u dobrom formatu";
            }

        if(count($errors)){
            $data = $errors;
            
        } else {
            $upit = "INSERT INTO user(username,email,s_password,role_id_u)
            VALUES(:username, :email, :s_password,2)";

            $spassword = md5($password);

            $adding = $conn->prepare($upit);
            $adding->bindParam(":username", $username);
            $adding->bindParam(":email", $email);
            $adding->bindParam(":s_password", $spassword);

            if($adding->execute()){
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