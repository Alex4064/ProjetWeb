<?php
	class login {
		public
		function __construct($email, $password){
			global $bdd;
			$result = $bdd->prepare("SELECT PassUser FROM user WHERE PassUser = \"".$password."\" AND Email = \"".$email."\"");
			$result->execute();
			$result2 = $result->fetch();
		}

	}

	?>