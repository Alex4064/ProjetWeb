<?php
   session_start();
   $error = FALSE;
   $connectionOK = FALSE;
   include("/../model/login.php");
   
   if(isset($_POST["connection"])){
      $email = $_POST['email'];
      $password = htmlspecialchars(trim($_POST['password']));
      
      if($email == NULL OR $password == NULL){
         $error = TRUE;
         $errorMSG = "You should fill the fields!";
      } else {
         $password = md5($password);
         $connection = new login($email, $password);
         
         if($_POST['connection'] == "ok") {
            $connectionOK = TRUE;
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            $connectionMSG = "Connection successful!";
         } else {
            $error = TRUE;
            $errorMSG = "Wrong email or password!";
         }

      }

   }
   
   if($error == TRUE){
      echo "<p align=center style=color:red><strong>".$errorMSG."</strong></p>";
      header("Refresh: 3; url=/site/view/login.html");
   }


   if($connectionOK == TRUE){
      echo "<p align=center style=color:green><strong>".$connectionMSG."</strong></p>";
      header("Refresh: 3; url=/site/view/index.html");
   }

   ?>