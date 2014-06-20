<?php

if(isset($_POST["login"])){

   if($_POST["username"] == NULL OR $_POST["password"] == NULL){
      
      $error = TRUE;
      
      $errorMSG = "Vous devez remplir tout les champs !";
      
   }

   else{
      
      $sql = "SELECT username FROM users WHERE username = '".$_POST["username"]."' ";
      
      $req = mysql_query($sql);
    
      if($sql){

         $sql = "SELECT * FROM users WHERE username = '".$_POST["username"]."' ";
      
         $req = mysql_query($sql);
   
         if($sql){

            $donnees = mysql_fetch_assoc($req);
                 
            if($_POST["password"] == $donnees["password"]){
            
               $connexionOK = TRUE;
               
               $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
               
               $_SESSION["username"] = $_POST["username"];
               
               $_SESSION["password"] = $_POST["password"];
            
            }
            
            // Sinon on lui affiche un message d'erreur.
            else{
            
               $error = TRUE;
            
               $errorMSG = "Nom de compte ou mot de passe incorrect !";
            
            }
         
         }
         
         // Sinon on lui affiche un message d'erreur.      
         else{
         
            $error = TRUE;
         
            $errorMSG = "Nom de compte ou mot de passe incorrect !";
         
         }
      
      }
      
      // Sinon on lui affiche un message d'erreur.      
      else{
         
         $error = TRUE;
         
         $errorMSG = "Nom de compte ou mot de passe incorrect !";
         
      }
   
   }  
}
?>
