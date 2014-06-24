<?php
   session_start();
   $error = FALSE;
   $connexionOK = FALSE;
   
   if(isset($_POST["connection"])){
      $email = $_POST['email'];
      $password = htmlspecialchars(trim($_POST['password']));
      
      if($email == NULL OR $password == NULL){
         $error = TRUE;
         $errorMSG = "You should fill the fields!";
      } else {
         global $bdd;
         $password = md5($password);
         $result = $bdd->prepare("SELECT PassUser FROM user WHERE PassUser = \"".$password."\" AND Email = \"".$email."\"");
         $result->execute();
         $result2 = $result->fetch();
         
         if($result2 != false) {
            $connexionOK = TRUE;
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            $connexionMSG = "Connection successful!";
         } else {
            $error = TRUE;
            $errorMSG = "Wrong email or password!";
         }

      }

   }

   
   if(isset($_SESSION["email"]) AND isset($_SESSION["password"])){
      echo "<p style=color:green>Welcome <strong>".$_SESSION["email"]."</strong></p>";
   }

   
   if($error == TRUE){
      echo "<p align=center style=color:red><strong>".$errorMSG."</strong></p>";
   }

   
   if($connexionOK == TRUE){
      echo "<p align=center style=color:green><strong>".$connexionMSG."</strong></p>";
   }

   ?>