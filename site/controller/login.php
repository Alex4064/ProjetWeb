<?php

session_start();

$error = FALSE;

$connexionOK = FALSE;

if(isset($_POST["email"])){

   $email = $_POST['email'];
   $password = htmlspecialchars(trim($_POST['password']));

   if($email == NULL OR $password == NULL){
      
      $error = TRUE;
      $errorMSG = "You should fill the fields!";
   }

   else{

      global $bdd;

   $password = md5($password);
   $result = $bdd->prepare("SELECT PassUser FROM user WHERE PassUser = \"".$password."\" AND Email = \"".$email."\"");
   $result->execute();

   $result2 = $result->fetch();


   if($result2 != false) {

      $connexionOK = TRUE;

         $_SESSION["email"] = $_POST["email"];
               
         $_SESSION["password"] = $_POST["password"];

         $connexionMSG = "Connection successful, you are now connected";
   }

   else {

      $error = TRUE;

      $errorMSG = "Wrong email or password!";
   }
}

}
?>

<?php if(isset($_SESSION["email"]) AND isset($_SESSION["password"])){
   
   echo "<p style=color:green>Welcome <strong>".$_SESSION["email"]."</strong></p>";
  
} ?>

<?php if($error == TRUE){ echo "<p align=center style=color:red><strong>".$errorMSG."</strong></p>"; } ?>

<?php if($connexionOK == TRUE){ echo "<p align=center style=color:green><strong>".$connexionMSG."</strong></p>"; } ?>




<body>
      
      <h2>Connexion au site</h2>
   
      <form action="#" method="post">
         
         <table>
            
            <tr>
               
               <td><label for="email"><strong>Email</strong></label></td>
               <td><input type="text" name="email" id="email"/></td>
               
            </tr>
            
            <tr>
               
               <td><label for="password"><strong>Password</strong></label></td>
               <td><input type="password" name="password" id="password"/></td>
               
            </tr>
            
         </table>
         
         <input type="submit" name="connexion" value="Se connecter"/>
      
      </form>

      </body>