<?php
	$inscriptionOK = FALSE;
	$error = FALSE;
	require("/../model/register.php");
	
		
	if(isset($_POST['register'])){
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$adress = $_POST['adress'];
		$phone = $_POST['phone'];
		$birthday = $_POST['birthday'];
		$country = $_POST['country'];
		$mdp = htmlspecialchars(trim($_POST['mdp']));
		$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
		
		if($firstname == NULL OR $lastname == NULL OR $email == NULL OR $adress == NULL OR $phone == NULL OR $birthday == NULL OR $country == NULL OR $repeatpassword == NULL){
			$error = TRUE;
			$errorMSG = "You should fill the fields!";
		} else {
			
			if($email&&$mdp&&$repeatpassword){
				
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
		header("Refresh: 3; url=./../view/register.php");
	}

	
	if($inscriptionOK == TRUE){
		echo "<p align=center style=color:green><strong>".$inscriptionMSG."</strong></p>";
		header("Refresh: 3; url=./../view/index.php");
	}

	

	?>