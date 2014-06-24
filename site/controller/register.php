<meta charset="utf-8">

<?php
if(isset($_POST['submit']))
{	
	$firstname = $_POST['FIRSTNAME'];
	$lastName = $_POST['LASTNAME'];
	$email = $_POST['EMAIL'];
	$adress = $_POST['ADRESS'];
	$phone = $_POST['PHONE'];
	$birthday = $_POST['Birthday'];
	$country = $_POST['country'];
	$mdp = htmlspecialchars(trim($_POST['mdp']));
	$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
	if ($login&&$mdp&&$repeatpassword)
	{
			if(strlen($mdp)>=6)
			{
				if($mdp==$repeatpassword)
				{
					$mdp = md5 ($mdp);
							global $bdd;
							$req = $bdd->prepare('INSERT INTO user(FirstName, LastName, Email, PassUser, Adress, Phone, Birthday) VALUES (:FirstName, :LastName, :Email, :PassUser, :Adress, :Phone, :Birthday)');
							$req->execute(array(
								'FirstName'=> $firstname,
								'LastName'=> $lastName,
								'Email'=> $email,
								'PassUser'=> $mdp,
								'Adress'=> $adress,
								'Phone'=> $phone,
								'Birthday'=> $Birthday
							));
				}else echo "Passwords are different";
			}else echo "Password is too short";
	}else {echo "Kindly enter all fields";}
}
?>

<head>
	<title>Registration</title>
</head>

<body>
	<h1>Registration</h1>

	<form action="#" method="post">
		<p>First Name</p><input name="firstName" type="text">

		<p>Last Name</p><input name="lastName" type="text">

		<p>E-mail</p><input name="email" type="email">

		<p>Mot de passe</p><input name="mdp" type="password">

		<p>Repeat your password</p><input name="repeatpassword" type=
		"password">

		<p>Adress</p><input name="adress" type="text">

		<p>Phone</p><input name="phone" type="tel">

		<p>Country</p><input name="country" type="text">

		<p>Birthday</p><input name="birthday" type="text"><br>
		<br>
		<input name="submit" type="submit" value="Register">
	</form>
</body>

