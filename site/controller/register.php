<?php
	$inscriptionOK = FALSE;
	$error = FALSE;
	
	if(isset($_POST['inscription'])){
		$firstname = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$adress = $_POST['adress'];
		$phone = $_POST['phone'];
		$birthday = $_POST['birthday'];
		$country = $_POST['country'];
		$mdp = htmlspecialchars(trim($_POST['mdp']));
		$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
		
		if($firstname == NULL OR $lastName == NULL OR $email == NULL OR $adress == NULL OR $phone == NULL OR $birthday == NULL OR $country == NULL OR $repeatpassword == NULL){
			$error = TRUE;
			$errorMSG = "You should fill the fields!";
		} else {
			
			if($login&&$mdp&&$repeatpassword){
				
				if(strlen($mdp)>=6){
					
					if($mdp==$repeatpassword){
						$mdp = md5 ($mdp);
						new register($firstname, $lastname, $email, $mdp, $adress, $phone, $birthday);
						$inscriptionOK = TRUE;
						$inscriptionMSG = "Registration successful";
					} else $error = TRUE;
					$errorMSG = "Passwords are different";
				} else $error = TRUE;
				$errorMSG = "Password is too short";
			} else {
				$error = TRUE;
				$errorMSG = "Kindly enter all fields";
			}

		}

	}

	
	if($error == TRUE){
		echo "<p align=center style=color:red><strong>".$errorMSG."</strong></p>";
	}

	
	if($inscriptionOK == TRUE){
		echo "<p align=center style=color:green><strong>".$inscriptionMSG."</strong></p>";
	}

	?>