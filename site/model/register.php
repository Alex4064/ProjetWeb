<?php
	class register {
		public
		function __construct($firstname, $lastname, $email, $mdp, $adress, $phone, $birthday) {
			require("connectionsql.php");
			$bdd = new connectionsql();
			$req = $bdd->bdd->prepare('INSERT INTO user(ID_USER, ID_COUNTRY, FIRSTNAME, LASTNAME, EMAIL, PASSUSER, ADRESS, PHONE, BIRTHDAY, ACTIVEUSER) VALUES (NULL, 1, :FirstName, :LastName, :Email, :PassUser, :Adress, :Phone, :Birthday, 1)');
			$req->execute(array('FirstName'=> $firstname,'LastName'=> $lastname,'Email'=> $email,'PassUser'=> $mdp,'Adress'=> $adress,'Phone'=> $phone,'Birthday'=> $birthday));
		}

	}

	?>