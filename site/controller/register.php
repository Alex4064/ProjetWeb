<meta charset="utf-8">

<?php
if(isset($_POST['submit']))
{	
	$firstname = $_POST['firstName'];
	$login = $_POST['username'];
	$lastName = $_POST['lastName'];
	$mail = $_POST['email'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
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
							
							$req = $bdd->prepare('INSERT INTO user(Username, FirstName, LastName, Mail, Pass, adress, Phone, Country) VALUES (:Username, :FirstName, :LastName, :Mail, :Pass, :adress, :Phone, :Country)');
							$req->execute(array(
								'Username'=> $login,
								'FirstName'=> $firstname,
								'LastName'=> $lastName,
								'Mail'=> $mail,
								'Pass'=> $mdp,
								'adress'=> $adress,
								'Phone'=> $phone,
								'Country'=> $country
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

	<form method="post" action="#">
		<p>Username</p>
			<input type="text" name="username">
		<p>First Name</p>
			<input type="text" name="firstName">
		<p>Last Name</p>
			<input type="text" name="lastName">
		<p>E-mail</p>
			<input type="email" name="email">
		<p>Mot de passe</p>
			<input type="password" name="mdp">
		<p>Repeat your password</p>
			<input type="password" name="repeatpassword">
		<p>Adress</p>
			<input type="text" name="adress">
		<p>Phone</p>
			<input type="tel" name="phone">
		<p>Country</p>
			<input type="text" name="country">
			<br><br>
			<input type="submit" name="submit" value="Register">
	</form>
</body>