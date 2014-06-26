<?php
	class login {
		public
		function __construct($email, $password){
			require("connectionsql.php");
			$bdd = new connectionsql();
			$result = $bdd->bdd->prepare("SELECT PASSUSER FROM user WHERE PASSUSER = \"".$password."\" AND EMAIL = \"".$email."\"");
			$result->execute();
			$result2 = $result->fetch();

			if($result2['PASSUSER'] == $password){
				$_POST['connection'] = "ok";
			}
		}

	}

	?>