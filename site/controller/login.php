<?php

session_start();

$error = FALSE;

$connexionOK = FALSE;

if(isset($_POST["login"])){

   $login = $_POST['login'];
   $password = htmlspecialchars(trim($_POST['password']));

   if($login == NULL OR $password == NULL){
      
      $error = TRUE;
      $errorMSG = "Vous devez remplir tout les champs !";    
   }

   else{

      global $bdd;

   $password = md5($password);
   $result = $bdd->prepare("SELECT Pass FROM user WHERE Pass = \"".$password."\" AND Username = \"".$login."\"");
   $result->execute();

   $result2 = $result->fetch();


   if($result2 != false) {

      $connexionOK = TRUE;

         $_SESSION["login"] = $_POST["login"];
               
         $_SESSION["password"] = $_POST["password"];

         $connexionMSG = "Connexion au site réussie. Vous êtes désormais connecté !";
   }

   else {

      $error = TRUE;

      $errorMSG = "Nom de compte ou mot de passe incorrect !";
   }
}

}
?>

<?php if(isset($_SESSION["login"]) AND isset($_SESSION["password"])){
   
   echo "<p style=color:green>Bienvenue <strong>".$_SESSION["login"]."</strong></p>";
  
} ?>

<?php if($error == TRUE){ echo "<p align=center style=color:red><strong>".$errorMSG."</strong></p>"; } ?>

<?php if($connexionOK == TRUE){ echo "<p align=center style=color:green><strong>".$connexionMSG."</strong></p>"; } ?>




<body>
      
      <h2>Connexion au site</h2>
   
      <form action="#" method="post">
         
         <table>
            
            <tr>
               
               <td><label for="login"><strong>Nom de compte</strong></label></td>
               <td><input type="text" name="login" id="login"/></td>
               
            </tr>
            
            <tr>
               
               <td><label for="password"><strong>Mot de passe</strong></label></td>
               <td><input type="password" name="password" id="password"/></td>
               
            </tr>
            
         </table>
         
         <input type="submit" name="connexion" value="Se connecter"/>
      
      </form>

      </body>