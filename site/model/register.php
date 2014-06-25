<?php
	class register {
		public
		function __construct($firstname, $lastname, $email, $mdp, $adress, $phone, $birthday) {
			global $bdd;
			$req = $bdd->prepare('INSERT INTO user(FirstName, LastName, Email, PassUser, Adress, Phone, Birthday) VALUES (:FirstName, :LastName, :Email, :PassUser, :Adress, :Phone, :Birthday)');
			$req->execute(array('FirstName'=> $firstname,'LastName'=> $lastName,'Email'=> $email,'PassUser'=> $mdp,'Adress'=> $adress,'Phone'=> $phone,'Birthday'=> $birthday));
		}

	}